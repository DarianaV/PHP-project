<?php
if (isset($_POST['username']) && isset($_POST['password'])) //този код се изпълнява ако файла се достъпва от формата за логин и са зададени името и паролата
                {
                    $username=$_POST['username'];                    
                    $password=$_POST['password'];              	                    
                                        
                    $sqlQuery = "SELECT id FROM users WHERE username='{$username}'
                                  AND password='{$password}'";
                    $result = mysqli_query($link, $sqlQuery) or die(mysqli_error($link));
                    /*
                    $salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
                    $saltedPassword = $password . $salt;
                    $hashedPassword = hash('sha256',$saltedPassword);

                    echo hash('sha256', $hashedPassword);                    
                    */
                    $count = mysqli_num_rows($result);
                    echo $count;
                    if($count == 1) {                                     
                    $_SESSION['id'] = $username;                 
                    header("location: loguser.php");                    
                    }else {
                    $error = "Your Login Name or Password is invalid";
                    echo"$error";
                 }

             }     
             ?>