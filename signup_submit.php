<?php
   require 'common.php';
    $name=$email=$password=$phone="";
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $phone =  mysqli_real_escape_string($conn, $_POST["phone"]);
    $hashed_password = md5($password);
    
    $query1 = "SELECT id FROM users WHERE email = '$email' AND password = '$hashed_password'";//query to check if email id alreaady exists or not
    $query2 = "INSERT INTO users (name, email, password, phone) VALUES ('$name', '$email', '$hashed_password', '$phone')";// query to insert the values into the db

    $result = mysqli_query($conn, $query1);
    if(mysqli_num_rows($result) > 0){
        
        echo "Email id already exists.";
    }else{
        
        $result = mysqli_query($conn, $query2);
        $_SESSION["email"] = $email;
        $_SESSION["id"] = mysqli_insert_id($conn);
        header("location: login.php");
    }
?>