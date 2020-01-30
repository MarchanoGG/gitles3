<?php
require('../components/config.php');
session_start();

$loginerror = "Email en/of Wachtwoord verkeerd ingevoerd";
$email = $_POST['email'];
$password = $_POST['password'];
$naam = $_POST['naam'];
$adres = $_POST['adres'];
$postcode = $_POST['postcode'];
$plaats = $_POST['plaats'];
$tel = $_POST['tel'];
$rank = 0;
$hashed = sha1($password);


$query = "INSERT INTO `O2_user` (`ID`, `Email`, `Wachtwoord`, `Naam`, `Adres`, `Postcode`, `Plaats`, `Telefoon`, `Rank`) 
                         VALUES (NULL, '$email', '$hashed', '$naam', '$adres', '$postcode', '$plaats', '$tel', '0')";

$result = mysqli_query($link, $query) or die(mysqli_error($link));
$count = mysqli_num_rows($result);



if ($count == 1){
    header("Location: login.php");
}else{
    header("Location: register.php?fail");
}