<?php
    /* DATABASE CONNECTION*/
    $db_name = 'mysql:host=localhost;dbname=register_login';
    $user_name = 'root';
    $user_password = '';

    $conn = new PDO($db_name, $user_name, $user_password);
    /*DATABASE CONNECTION */
?>