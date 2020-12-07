<?php
    require 'common.php';
    $name = mysqli_real_escape_string($conn,$_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $query="SELECT email FROM users WHERE email='$email'" ;
    $result=mysqli_query($conn,$query);
    $num= mysqli_num_rows($result);
    //randomPassword() creates a random string of length 8
    function randomPassword() {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
   }

    if($num==0)
    {

        echo"<script>
        alert('Invalid username or phone number.');
        window.location.href='forgot.php';
        </script>";
    }
    else{
        $row = mysqli_fetch_array($result);
        $n=randomPassword();//stores random string
        $hashed_password=md5($n);//encrypt $n
        //sql query to update the password 
        $query1="UPDATE users SET password='$hashed_password' WHERE email='$email'";
        //performs the above query on the database
        $result1=mysqli_query($conn,$query1);
        echo"<script>
        alert('Your new password is $n. \n Login again.');
        window.location.href='login.php';
        </script>";
    }
?>