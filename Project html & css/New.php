<?php
session_start();
include 'BD.php';
include 'login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TODO</title>
    <link rel="stylesheet" href="index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.5/jquery.bxslider.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.5/jquery.bxslider.css">       
</head>
<body>
    <header class="site-header">                 
       <img src="image/Jamie_header.jpg" alt="header-picture">

        <div class="motto">
        <h1>С нас всичко е по-вкусно!</h1> 
        </div>
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
               echo "Здравей, " . $_SESSION['username'];
               ?>
               <a href="logout.php">Изход</a>
           </div>
       </nav>
    </header>  

    <main>
    <ul class="bxslider">
        <div class="div1">
           <li><img src="image/salata7.jpg" alt="Image one"/></li>
        </div>
        <div class="div2">
            <li><img src="image/vegi8.jpg" alt="Image two"/></li>
        </div>
        <div class="div3">
            <li><img src="image/salata3.jpg" alt="Image three"/></li>
        </div>   
        <div class="div4">
            <li><img src="image/app4.jpg" alt="Image three"/></li>
        </div>       
    </ul>    
    <aside>
        <div>
            <a href="Appetizer.html">Предястия</a>
        </div>
        <div>
            <a href="Soup.html">Супи</a>
        </div>
        <div>
            <a href="Salad.html">Салати</a>
        </div>
        <div>
            <a href="Meal-dish.html">Основни ястия</a>
        </div>
        <div>
            <a href="Veg-food.html">Безмесни ястия</a>
        </div>
        <div>
            <a href="Pizza.html">Пица и Паста</a>
        </div>
        <div>
            <a href="Dessert.html">Десерти</a>
        </div>
    </aside>
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

<script type="text/javascript">
 $(document).ready(function(){
  $('.bxslider').bxSlider();
});
</script>
</body>
</html>