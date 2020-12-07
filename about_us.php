<?php
  require 'common.php';
?>
<!--For this page, I have used bootstrap for styling-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lifestyle store</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/de4a40988b.js" crossorigin="anonymous"></script>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
   <?php
       require "header.php";
   ?>
   <div class="row r1style">
       <div class="container">
           <div class="col-xs-6">
              <h2>Who are we?</h2>
              <p>We are a group of young aspiring developers who came up with an idea of solving budget and time issues which we usually face in our daily lives.
                 We are here to provide a budget controller according to your aspects.<br>Budget control is the biggest financial issue in the present world.
                 One should look after their budget control to get ride off from their financial crisis.
                </p>
           </div>
           <div class="col-xs-6">
               <h2>Why choose us?</h2>
               <p> We provide with a predominant way to control and manage your budget estimations with ease of accessing for multiple users.</p>
            </div>
        </div>
    </div>
    <div class="row r1style">
      <div class="container">
           <div class="col-xs-6">
               <h2> Contact Us </h2>
               <p><b>Email:</b> controlBudget@gmail.com <br> <b>Mobile:</b> +91 8448444853</p>
           </div>
        </div>
    </div>
    <?php
       require "footer.php";
   ?>
</body>
</html>