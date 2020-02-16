<?php
$email= $_POST["Email"];
$pass= $_POST["Password"];
$bdd->exec("SELECT * FROM users WHERE email like '%$email%'");
if($bdd == null){
    header("Location: ../index.php"); 
}
else{
    header("Location: login.php"); 

}

