<?php
session_start();
include 'BD.php';
$commentText = $_POST['comment'];
$userID = $_SESSION['id'];
$recipeId = $_SESSION['id_edit'];
echo $recipeId;

$sqlQuery = "INSERT INTO comments (id_recipes, id_user, text) VALUES ('$recipeId', '$userID', '$commentText')";
$result = mysqli_query($link, $sqlQuery) or die(mysqli_error($link));

if($result){
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'all-comments.php';
    header("Location: http://$host$uri/$extra?id_recipe=". $recipeId);    
}

?>