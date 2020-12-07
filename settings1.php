<?php
 require "common.php";
 //email from the url is stored
 $email=$_REQUEST["q"];
 $query1="SELECT id,name FROM users WHERE email='$email'";
 $result1=mysqli_query($conn,$query1);
 $row1=mysqli_fetch_array($result1);
 $id=$row1['id'];
 $query="SELECT * FROM dt WHERE u_id='$id'";
 $result=mysqli_query($conn,$query) or die(mysqli_error($conn));
 $row=mysqli_fetch_array($result);
 $name=$row1['name'];
 $title=$row['title'];
 $budget=$row['budget'];
 $people=$row['people'];
 $from_date=$row['from_date'];
 $to_date=$row['to_date'];

 echo "<br>";
 echo "Name :" . $name;
 echo "<br>";
 echo " Title :" . $title ;
 echo "<br>";
 echo "Budget :" . $budget;
 echo "<br>";
 echo "No. of people :" . $people ;
 echo "<br>";
 echo " From :" . $from_date ;
 echo "<br>";
 echo " To :" . $to_date ;
?>