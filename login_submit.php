<?php
    require 'common.php';
    $email=$password="";
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $hashed_password = md5($password);

    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$hashed_password'";
    $query_result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $row = mysqli_fetch_array($query_result);
   
    if(mysqli_num_rows($query_result) == 0){
        echo"<script>
        alert('User account does not exists.');
        window.location.href='login.php';
        </script>";
    }
    else if($row["password"]!=$hashed_password)
    {
        echo"<script>
        alert('Wrong password. Re-try again');
        window.location.href='login.php';
        </script>"; 
    }
    else{
        
        $_SESSION["email"] = $email;
        $_SESSION["id"] = $row["id"];

        // redirect to products page
        header("location: home.php");
    }
?>