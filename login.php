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
    <title>Login</title>
    <script>
    </script>
</head>
<body>
    <?php require "header.php";?>
    <center>
        <div style="padding-top:24px">
        <img src="img/logo.jpg" style="width:60px"></img>
            <h3>Log in to Control Budget</h3>
        </div>
        </center>
        <div class="form_container">
            <form action="login_submit.php" method="POST">
                    <ul type="none">
                        <li><b>Email Id:</b><br>
                            <input type="text" id="email" class="tbox" name="email" placeholder="Email Id" required>
                        </li>
                        <li><p><b>Password:<a href="forgot.php" style="padding-left:63px">Forgot Password?</a></b><br>
                            <input type="password" id="password" class="tbox" name="password" placeholder="Password" required>
                            </p>
                        </li>
                        <li><input type="submit" value="Login" id="login" name="login" class="btn1"></li>
                    </ul>
            </form>
            </div>
            <center>
            <div class="form_container" style="border:1px solid grey; width:26%; border-radius:4px;margin-top:14px;background-color: rgb(243, 243, 243)">
                <ul type="none">
                    <li>Don't have an account?<a href="signup.php">Register</a></li>
                </ul>
            </div>
           </center>
    <?php require "footer.php";?>
</body>
</html>