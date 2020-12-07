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
    <title>Change Password</title>
</head>
<body>
<?php require "header.php";?>
        <div class="form_container" style="border-radius: none">
            <form action="change_pass.php" method="POST" style="border-radius: 1px; border-top:none;margin-top:20px">
            <div style="background-color:rgb(16, 146, 103);color:white">
                <h3 style="text-align:center">Change Password</h3>
            </div>
                <div>
            <ul type="none">
              <li>  <label for="name">Name:</label></li>
                 <input type="text" placeholder="Enter your name" id="name" class="tbox" name="name" pattern="/^[a-zA-Z]+ [a-zA-Z]+$/" required></li><br><br>
                 <li>  <label for="current">Current Password:</label>
                <input type="password" placeholder="Enter your current password" class="tbox" id="current" name="current" required></li><br>
                <li>  <label for="new">New Password:</label>
                <input type="password" placeholder="Enter your new password" id="new" class="tbox" name="new" required></li><br>
                    <li><input type="submit" value="Submit" class="btn1"></li>
                
            
                </div>
            </form>
        </div>
        <?php require "footer.php";?>
</body>
</html>