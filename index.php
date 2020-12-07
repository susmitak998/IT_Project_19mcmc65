<?php 
    require "common.php";
    if(isset($_SESSION['email']))
    {
        header("location: home.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/de4a40988b.js" crossorigin="anonymous"></script>
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Control Budget</title>
</head>
<body>
    <?php require "header.php"; ?>
    <div id="banner_image">
        <div class="container">
            <center>
            <div id="banner_content">
                <h1>We help you control your budget.</h1>
                <a href="login.php" class="btn">Start Today</a>
            </div>
            </center>
    </div>
    <?php require "footer.php"; ?>
</body>
</html>