<?php
session_start();
include 'BD.php';
$title = $_POST['recipesname'];
$text = $_POST['recipes'];
$image = $_POST['file'];
$user = $_SESSION['id'];
$recipesID = $_SESSION['id_edit'];
$sqlQuery ="UPDATE recipes SET id_user = '$user',title = '$title', text = '$text', pic = '$image'
            WHERE id = '$recipesID'";                
$result = mysqli_query($link, $sqlQuery) or die(mysqli_error($link));
if($result) {				
 echo "Промяната беше изпълнена успешно!";
 header("location:myrecipes.php");
}
?>