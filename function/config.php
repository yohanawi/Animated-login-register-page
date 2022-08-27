<?php
    /* DATABASE CONNECTION*/
    $con = mysqli_connect("localhost","root","","register_login");

    if(!$con){
        die('Connection Failed'. mysqli_connect_error());
    }
    /*DATABASE CONNECTION */
?>