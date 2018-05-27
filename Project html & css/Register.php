<?php
session_start();
include 'BD.php';
$nameOfUser = $_POST['name'];
$lastName = $_POST['last_name'];
$email1 = $_POST['e-mail'];
$userName = $_POST['username'];
$password = $_POST['password'];  
    

     $salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));    
     //$hashedPassword = hash('sha256',$saltedPassword);     
     $hashedPassword = hash('sha256',$password);
     $saltedPassword = $hashedPassword . $salt;
     echo $hashedPassword . "</br>"; echo $saltedPassword;
     $sqlQuery = "INSERT INTO users(name, last_name, email, username, password, salt)
                  VALUES('$nameOfUser','$lastName','$email1','$userName','$hashedPassword','$saltedPassword')";
	 $result = mysqli_query($link, $sqlQuery) or die(mysqli_error($link));
     

if($result){
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'log.html';
    header("Location: http://$host$uri/$extra?id_article=".mysqli_insert_id($link));
    exit;
}

?>