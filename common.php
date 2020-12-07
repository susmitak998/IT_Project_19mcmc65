<?php
    $conn = mysqli_connect("localhost", "root", "", "budget","3308")
    or die(mysqli_error($conn));
    if(!isset($_SESSION)){
      session_start();
    }
?>
