<?php
   session_start();
   include 'config.php';
   if(isset($_POST['signup'])){

      $name = $_POST['name'];
      $name = filter_var($name, FILTER_SANITIZE_STRING);
      $email = $_POST['email'];
      $email = filter_var($email, FILTER_SANITIZE_STRING);
      $password = sha1($_POST['password']);
      $password = filter_var($password, FILTER_SANITIZE_STRING);
      $cpassword = sha1($_POST['cpassword']);
      $cpassword = filter_var($cpassword, FILTER_SANITIZE_STRING);
     
      $select_users = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
      $select_users->execute([$email]);
     
      if($select_users->rowCount() > 0){
         $message[] = 'email already taken!';
      }else{
         if($password != $cpassword){
            $message[] = 'confirm password not matched!';
         }else{
            $insert_user = $conn->prepare("INSERT INTO `users`(name, email, password) VALUES(?,?,?)");
            $insert_user->execute([$name, $email, $password]);
            if($insert_user){
               $fetch_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
               $fetch_user->execute([$email, $cpassword]);
               $row = $fetch_user->fetch(PDO::FETCH_ASSOC);
               if($fetch_user->rowCount() > 0){
                  // 60*60*24 = 86400 seconds which is equals to 1 day;
                  // to set cookies for 1 month use 60*60*24*30
                  setcookie('user_id', $row['id'], time() + 60*60*24, '/');
                  header('location:../home.php');
               }
            }
         }
      }
   }

   if(isset($_POST['signin'])){

      $email = $_POST['email'];
      $email = filter_var($email, FILTER_SANITIZE_STRING);
      $password = sha1($_POST['password']);
      $password = filter_var($password, FILTER_SANITIZE_STRING);
     
      $select_users = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
      $select_users->execute([$email, $password]);
      $row = $select_users->fetch(PDO::FETCH_ASSOC);
    
      if($select_users->rowCount() > 0){
         setcookie('user_id', $row['id'], time() + 60*60*24, '/');
         header('location:../home.php');
      }else{
         $message[] = 'incorrect email or password!';
         header('location:../index.php');
      }  
   }
?>