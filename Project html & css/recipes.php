<?php
session_start();
include 'BD.php';

 $Title = $_POST['recipesname'];
 $Text =$_POST['recipes']; 
 $user = $_SESSION['id'];
 
 $catName = $_POST['food']; 
 print_r($_POST['recipes']);

     $query="INSERT INTO categories(categoryName) VALUES('$catName')";
     $result = mysqli_query($link, $query) or die(mysqli_error($link));
     if(isset($_POST['submit']))
     {
        $target = "image/".basename($_FILES['file']['name']);
     	$image = $_FILES['file']['name'];   
        $size = $_FILES['file']['size'];
        if($size > 1024000)	// 1mb 1024*1024
        {
            echo"too large!";
        }     	
     }    
     $IDquery = "SELECT * FROM categories WHERE categoryName = '$catName'";
     $ID = mysqli_query($link, $IDquery) or die(mysqli_error($link));
     while ($catId = mysqli_fetch_array($ID)) {
        $getID = $catId['id'];
     }      
     $sqlQuery = "INSERT INTO recipes(id_user, id_category, title, text, pic) VALUES('$user','$getID','$Title','$Text','$image')";
	 $result = mysqli_query($link, $sqlQuery) or die(mysqli_error($link));
     if(move_uploaded_file($_FILES['file']['tmp_name'], $target)){
       $msg = "Yes";
     }else{
       $msg="No";
     } 

if($result){
    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'all-recipes.php';
    header("Location: http://$host$uri/$extra?id_article=".mysqli_insert_id($link));
    exit;
}

?>