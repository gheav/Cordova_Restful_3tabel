<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $title=$_POST['title'];
 $duration=$_POST['duration'];
 $price=$_POST['price'];
 $status=$_POST['status'];
 $q=mysqli_query($con,"INSERT INTO `course_details` (`title`,`duration`,`price`,`status`) VALUES ('$title','$duration','$price','$status')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>