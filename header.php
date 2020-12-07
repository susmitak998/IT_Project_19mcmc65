<!--if the session is set or when the user logs in, it will show a different navigation bar instead of the one before logging in-->
<?php
 if (isset($_SESSION['email'])) 
   {
 ?>
<div class="header">
          <a href="index.php" class="logo"><img src="img/logo1.jpg" id="left" style="width:30px"></img><span class="font-weight-bold">&nbsp Control Budget</span></a>
          <div class="header-right">
             <a href="change.php"><i class="fas fa-user"></i>&nbsp; Change Password</a>
             <a href="settings.php"><i class="fas fa-cog"></i>&nbsp; Settings</a>
             <a href="about_us.php"><i class="fas fa-info-circle"></i>&nbsp; About us</a>
             <a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp; Logout</a>
          </div>
    </div>
<?php
 } 
 else 
 {
    ?>
    <div class="header">
          <a href="index.php" class="logo"><img src="img/logo1.jpg" id="left" style="width:30px"></img><span class="font-weight-bold">&nbsp Control Budget</span></a>
          <div class="header-right">
             <a href="signup.php"><i class="fas fa-user"></i>&nbsp; Signup</a>
             <a href="login.php"><i class="fas fa-sign-in-alt"></i>&nbsp; Login</a>
             <a href="about_us.php"><i class="fas fa-info-circle"></i>&nbsp; About us</a>
          </div>
    </div>
    <?php
    }
    ?>