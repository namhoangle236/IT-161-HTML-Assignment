<!DOCTYPE html>
<html>
  <head>
    <title>Ngoc Bich's Gallery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Nam Le">
    <meta name="description" content="A showcase website for Ngoc Bich's artworks">
    <meta name="keywords" content="art painting hand-painted portfolio watercolor flora flower gallery handbags canvas">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- for social media icons -->
  </head>
  <body>
    <div class="wrapper">
  
<!-- Header -->
      <header>
        <a href="index.html"><img src="images/logo.png" alt="Logo" class="logo"></a>
      </header>

<!-- Navigation -->
      <nav>   
        <a href="index.html" class="button">Home</a></li>
        <a href="index.html#about" class="button">About Us</a></li>
        <a href="index.html#gallery" class="button">Gallery</a></li>
        <a href="contact.php" class="button">Contact Us</a></li>
      </nav> 

<!-- Contact -->
      <div class="contact" id="contact">
        <h2 class="subheader">Contact Us</h2>
        <?php
          include 'includes/contact_include.php'; // site keys & code here
          $toAddress = "namhoangle236@example.com";  // place your/your client's email address here
          $toName = "Ngoc Bich"; // place your client's name here
          $website = "Ngoc Bich's Gallery";  // place NAME of your client's website

          echo loadContact('simple.php'); #demonstrates a simple contact form
        ?>
        </div>

<!-- Footer -->    
      <footer>
        <p> <small>&copy; 2023 Ngoc Bich's Gallery. All rights reserved. ~<a href="https://validator.w3.org/"> Check HTML </a>~<a href="https://jigsaw.w3.org/css-validator/"> Check CSS</a></small></p>
      </footer>
    </div>
  </body>
</html>