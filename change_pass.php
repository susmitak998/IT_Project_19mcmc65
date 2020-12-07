<?php
    require 'common.php';
    $name = mysqli_real_escape_string($conn,$_POST["name"]);
    $current = mysqli_real_escape_string($conn,$_POST["current"]);
    $hashed_current=md5($current);
    $new=mysqli_real_escape_string($conn,$_POST["new"]);
    $hashed_new=md5($new);
    $query="SELECT name FROM users WHERE name = '$name' AND password = '$hashed_current'" ;
    $result=mysqli_query($conn,$query) or die($mysqli_error($conn));
    $num= mysqli_num_rows($result);

    if($num==0)
    {
        echo"<script>
        alert('Invalid name or current password.');
        window.location.href='change.php';
        </script>"; 
    }
    else if($num==1){
        $query1="UPDATE users SET password='$hashed_new' WHERE name='$name'";
        $result1=mysqli_query($conn,$query1) or die($mysqli_error($conn));
        echo"<script>
        alert('Password successfully changed.');
        window.location.href='change.php';
        </script>"; 
    }
?>