<?php
 require 'common.php';
 $title=$to=$from=$budget=$people="";
$title=mysqli_real_escape_string($conn,$_POST["title"]);
$to=mysqli_real_escape_string($conn,$_POST["to_date"]);
$from=mysqli_real_escape_string($conn,$_POST["from_date"]);
$budget=mysqli_real_escape_string($conn,$_POST["budget"]);
$people=mysqli_real_escape_string($conn,$_POST["people"]);
$u_id=$_SESSION["id"];

$query="INSERT INTO dt (u_id,title,budget,people,from_date,to_date) VALUES ('$u_id','$title','$budget','$people','$from','$to')";
$result=mysqli_query($conn,$query) or die(mysqli_error($conn));
$_SESSION["title"]=$title;
$_SESSION["people"]=$people;

header("location:plan_home.php");
?>