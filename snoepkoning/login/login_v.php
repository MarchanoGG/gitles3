<?php
require('../components/config.php');
session_start();

        $loginerror = "Email en/of Wachtwoord verkeerd ingevoerd";
        $username = $_POST['email'];
        $password = $_POST['password'];
        $hashed = sha1($password);

        $query = "SELECT * FROM `O2_user` WHERE Email='$username' and Wachtwoord='$hashed'";

        $result = mysqli_query($link, $query) or die(mysqli_error($link));
        $count = mysqli_num_rows($result);



        if ($count == 1){
            $_SESSION['username'] = $username;
            header("Location: ../index.php");
        }else{
            header("Location: login.php?fail=1");
        }