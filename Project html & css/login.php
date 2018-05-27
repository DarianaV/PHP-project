<?php
include 'BD.php';
//session_start();
             
               
                
                if (isset($_POST['username']) && isset($_POST['password'])) //този код се изпълнява ако файла се достъпва от формата за логин и са зададени името и паролата
                {
                    $username=$_POST['username'];
                    $password = $_POST['password'];                   
                     
                    $salt = bin2hex(mcrypt_create_iv(32,  MCRYPT_DEV_URANDOM));           	                    
                    $new = hash('sha256',$password);                                 
                    echo $new . "</br>";
                    
                    $sql= "SELECT * FROM users WHERE username='{$username}'";  
                    $result=mysqli_query($link, $sql) or die(mysqli_error($link));                  
                    
                    if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_array($result);
                    echo "hashedPass = ${row['password']}";
                    echo "myPassword: " . $new;                    
                     }
                    if($row['password'] == $new){
                    session_start();
                    $_SESSION['username'] = $username;
                    $_SESSION['id'] = $row['id'];                    
                    header("location:New.php");                
                    }  else{
                    header("location:log.html");
                    echo "The username or password do not match";
                    }               

             }                
                 
?>