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
    <title>Registration</title>
</head>
<body>
<?php require "header.php";?>
        <div class="form_container" style="border-radius: none">
            <form action="signup_submit.php" method="POST" style="border-radius: 1px; border-top:none;margin-top:20px">
            <div style="background-color:rgb(16, 146, 103);color:white">
                <h3 style="text-align:center">Sign up</h3>
            </div>
                <div>
                <ul type="none">
                    <li><b>Name:</b><br><input type="text" id="name" name="name" class="tbox" placeholder="Enter your name"></li><br>
                    <li><b>Email:</b><br><input type="email" id="email" class="tbox" name="email" placeholder="Enter your email"></li><br>
                    <li><b>Password:</b><br><input type="password" id="password" class="tbox" name="password" placeholder="Enter a password"></li><br>
                    <li><b>Phone no:</b><br><input type="number" id="phone" class="tbox" name="phone" placeholder="Enter valid phone number"></li><br>
                    <li><input type="submit" value="Submit" class="btn1"></li>
                    <li>Already have an account?<a href="login.php">Login</a></li>
                </ul>
                </div>
            </form>
        </div>
        <?php require "footer.php";?>
</body>
</html>