<?php
include 'dbconnexion.php';
$firstname=$_POST['FirstName'];
$lastename=$_POST['LastName'];
$email=$_POST['Email'];
$phone=$_POST['phone'];
$pass=$_POST['Password'];
$bdd->exec("INSERT INTO users (FirstName,LastName,Email,Password,phone) Values('$firstname','$lastename','$email','$pass','$phone')");
session_start();
$_SESSION['email']=$email;
$_SESSION['FullName']=$firstname+" "+$lastename;
header("Location: ../login.php"); 

?>