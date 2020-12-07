<?php
 require "common.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/de4a40988b.js" crossorigin="anonymous"></script>
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Forgot Password</title>
</head>
<body>
    <?php require "header.php"; ?>
    <center>
        <div style="padding-top:24px">
        <img src="img/logo.jpg" style="width:60px"></img>
   
            <h3>Forgot Password</h3>
    
        </div>
        </center>
    <div class="form_container" style="border-radius: none">
    
            <form action="forgot_pass.php" method="POST" style="padding-top:none">
                <ul type="none">
                    <li><b>Name:</b><br><input type="text" id="name" name="name" class="tbox" placeholder="Enter your name"></li><br>
                    <li><b>Email:</b><br><input type="email" id="email" class="tbox" name="email" placeholder="Enter your email"></li><br>
                    <li><input type="submit" value="Submit" class="btn1"></li>
                    
                </ul>
            </form>

        </div>
    
    <?php require "footer.php"; ?>
</body>
</html>