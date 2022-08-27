<?php
    session_start();
    include 'config.php';
    if(isset($_POST['signup']))
    {
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $query = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')";
        $query_run = mysqli_query($con, $query);
        if($query_run)
        {
            $_SESSION['message'] = "Created Successfully";
            header("Location: ../dashboard.php");
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Not Created";
            header("Location: ../index.php.php");
            exit(0);
        }
    }
?>