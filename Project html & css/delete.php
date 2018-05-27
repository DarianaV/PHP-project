<?php
session_start();
include 'BD.php';

$recipesID = $_GET['id_recipe'];
$query = "SELECT * FROM recipes WHERE id = '$recipesID'";
$categoryResult = mysqli_query($link, $query) or die(mysqli_error($link));
$id;
while($categoryID = mysqli_fetch_array($categoryResult)) { 
      $id = $categoryID['id_category'];      
      $delQuery = "DELETE FROM categories WHERE id = '$id'";
      $result = mysqli_query($link, $delQuery) or die(mysqli_error($link));
}

$sqlQuery="DELETE FROM recipes WHERE id = '$recipesID'";
$result = mysqli_query($link, $sqlQuery) or die(mysqli_error($link));


if($result)
{
  header("location:myrecipes.php");
}else{
 echo"does not delete";
}

?>