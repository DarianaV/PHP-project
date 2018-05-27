<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Рецепти</title>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="recipes.css">
</head>
<body>
<header class="site-header">                 

       <nav class="nav-bar">
           <a href="index.html" class="site-title">BestOfCook</a>

        <div id="unique">
            <span class="search">
                    <input type="text" name="" placeholder="Търсене">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </span>

            <div class="falling-menu">
                <i class="fa fa-bars" aria-hidden="true"></i>
                <ul>
                 <?php
                if (isset($_SESSION['username']))
                {       
                    echo '<li><a href="all-recipes.php">Рецепти</a></li>';          
                    echo '<li><a href="recipes-design.php">Напиши рецепта</a></li>';
                    echo '<li><a href="myrecipes.php">Моите рецепти</a></li>';
                                        
                }
                else
                {
                    echo '<li><a href="all-recipes.php">Рецепти</a></li>';                    
                    echo '<li><a href="">Цени</a></li>';
                    echo '<li><a href="">За нас</a></li>';
                   
                }

                ?>     
                </ul>
            </div>
        </div>

           <div class="reg-log-wrapper">
               <?php
                if (isset($_SESSION['username']))
                {                                                    
                    echo "Здравей, " . $_SESSION['username'];
                    echo '<a href="logout.php">Изход</a>';                    
                }
                else
                {
                    echo '<a href="Register.html">Регистрaция</a>';
                    echo '<a href="log.html">Вход</a>';
                }

           ?>       
           </div>
       </nav>
    </header>  
    <main>
   <form method="POST" action="recipes.php" class="form1" enctype="multipart/form-data">
   	  <label>
   	  	Сподели рецепта за:
      </label>
        <?php
        $categories = array('Predqstiq', 'Supi', 'Salati', 'Osnovni qstiq', 'Bezmesni qstiq','Pica i Pasta','Desserti');
        echo"<select name='food' class='category'>";
          foreach ($categories as $c) {            
              echo"<option>$c</option>";           
          }
          echo"</select>";         
        ?>  	  	
   	  <input type="text" name="recipesname" class="text-recipe" placeholder="Име на рецепта">
   	  <textarea name="recipes" class="new-recipe" placeholder="Напиши рецепта"></textarea>
      <p class="photo">Качи снимка</p>
      <input type="file" name="file" size="90">      
      <input type="submit" name="submit" value="Публикувай!" class="submit" >
   </form>
   </main>
   <footer>
  <section class="first-part-footer">
        <i class="fa fa-envelope-o" aria-hidden="true"></i>
        <article class="newsletter-form">
            <h2>Recipes by Email</h2>
            <p>Receive <strong>free</strong> expert tips & inspiring weekly recipes right to your inbox.</p>
        </article>
        <div class="enter-email">
            <input type="email" class="email" placeholder="Enter Email Address"/>
            <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
        </div>
    </section>
    <section class="second-part-footer">
        <div class="resizing-div">
            <section class="join-community">
                <h2>join our community</h2>
                <img src="icons-folder/facebook-icon.ico">
                <img src="icons-folder/twitter-icon.ico">
                <img src="icons-folder/youtube-icon.ico">
                <img src="icons-folder/pinterest-icon.ico">
            </section>
            <div class="list-more-details">
                <ul>
                    <li><a href="">about us</a></li>
                    <li><a href="">blog</a></li>
                    <li><a href="">news</a></li>
                    <li><a href="">privacy policy</a></li>
                    <li><a href="">terms of service</a></li>
                </ul>
                <ul>
                    <li><a href="">help</a></li>
                    <li><a href="">help center</a></li>
                    <li><a href="">site map</a></li>
                    <li><a href="">FAQs</a></li>
                </ul>
                <ul>
                    <li><a href="">contact us</a></li>
                    <li><a href="">phone: 455 566 789</a></li>
                    <li><a class="own-email" href="">E-mail: recipes@gmail.com</a></li>
                </ul>
            </div>
            <p class="rights">&copy;All rights reserved</p>
        </div>
    </section>
</footer>
</body>
</html>