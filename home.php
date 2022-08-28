<?php
    //database connection
    require './function/config.php';
    if (isset($_COOKIE['user_id'])) {
        $user_id = $_COOKIE['user_id'];
    } else {
        $user_id = '';
        header('location:login.php');
    }

    $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
    $select_profile->execute([$user_id]);
    $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="Css/style.css" />
        <link rel="icon" href="./images/60111.jpg">
        <title>Sign in & Sign up Form</title>
    </head>

    <body>
    <div class="contents">
        <div class="box">
            <h3>welcome : <span><?= $fetch_profile['name']; ?></span></h3>
            <div class="flex-btn">
                <a href="index.php" class="delete-btn" onclick="return confirm('logout from the website?');">logout</a>
            </div>

        </div>
    </div>
    </body>
</html>