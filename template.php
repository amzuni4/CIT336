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
  <meta name="description" content="Fictional ACME Corporation Resturant">
  <!-- external style references in the proper cascading order -->
   <link href="css/normalize.css" rel="stylesheet" type="text/css"/>
    <!-- <link href="css/main.css" rel="stylesheet" type="text/css"/>
    <link href="css/medium.css" rel="stylesheet" type="text/css"/>
    <link href="css/large.css" rel="stylesheet" type="text/css"/>-->
  <link href="css/style.css" rel="stylesheet" type="text/css"/>

 </head>
 <body>
  <div id="container">

   <div class="top-bar"></div>

   <header>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/header.php'; ?> 
   </header>

   <nav>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/nav.php'; ?> 
   </nav>




   <main class="content"> 
    <h1>Content Title Here</h1>

   </main>
   <footer class ="footer">
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/acme/common/footer.php'; ?> 
   </footer>
   <script src="js/hamburger.js"></script>
  </div>
 </body>
</html>
