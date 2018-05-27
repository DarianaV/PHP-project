<?php
session_start();
include 'BD.php';
$userName = $_POST['username'];


 $query = "SELECT * FROM users WHERE username = '$userName'";
     $re = mysqli_query($link, $query) or die(mysqli_error($link));
     if(mysqli_num_rows($re) < 1){
        echo '<span>Username not available</span>';
     }else{
        echo '<span>Username is available</span>';
     }

?>