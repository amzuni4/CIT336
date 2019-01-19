<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
 <head>
  <meta charset="UTF-8">
  <!-- makes page responsive -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ACME- Coporation Template Page</title>
  <meta name="author" content="Amy Zuniga">
  <meta name="description" content="acme FOR cit336">
  <link href="css/normalize.css" rel="stylesheet" type="text/css"/>
  <link href="css/style.css" rel="stylesheet" type="text/css"/>

 </head>
 <body>
  <div id="container">

   <header>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/header.php'; ?> 
   </header>

   <nav>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/nav.php'; ?> 
   </nav>




   <main class="content"> 
    <h1>Welcome to Acme</h1>
    <div class="herodiv">
     <img src="images/site/rocketfeature.jpg" alt="RocketLauncher"/>
    </div>
    <section class='stats'>

     <ul class='heroUL'>
      <li><h2>Acme Rocket</h2></li>
      <li>Quick lighting fuse</li>
      <li>NHTSA approved seat belts</li>
      <li>Mobile launch stand included</li>
      <li><a href=""><img id="actionbtn" alt="Add to cart button" src="/acme/images/site/iwantit.gif"></a></li>

     </ul>
    </section>
    <div class="bottom">
     <div class="reviewBox">
      <p><b>Acme Rocket Reviews</b></p>
      <ul>
       <li>"I don't know how I ever caught roadrunners before this." (4/5)</li>
       <li>"That thing was fast!" (4/5)</li>
       <li>"Talk about fast delivery." (5/5)</li>
       <li>"I didn't even have to pull the meat apart." (4.5/5)</li>
       <li>"I'm on my thirtieth one. I love these things!" (5/5)</li>
      </ul>
     </div>
     <div class="featRecipes">
      <p><b>Featured Recipes</b></p>
 
     <div class="cover">
      <div>
       <div class="img">
       <img src="images/recipes/bbqsand.jpg" alt="Pulled Pork Sandwhich"/>
       </div>
       <p><a href="#">Pulled Roadrunner BBQ</a></p>
      </div>
      <div>
       <div class="img">
       <img src="images/recipes/potpie.jpg" alt="Bowl of Potpie"/>
       </div>
       <p><a href="#">Roadrunner Pot Pie</a></p>
      </div>
      <div>
       <div class="img">
       <img src="images/recipes/soup.jpg" alt="Bowl of Soup"/>
       </div>
       <p><a href="#">Roadrunner Soup</a></p>
      </div>
      <div>
       <div class="img">
       <img src="images/recipes/taco.jpg" alt=" Plate of Tacos"/>
       </div>
       <p> <a href="#">Road Runner Tacos</a></p>
      </div>
     </div>
     </div>
   </main>

   <footer class ="footer">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?> 
   </footer>
   <script src="js/hamburger.js"></script>
  </div>
 </body>
</html>
