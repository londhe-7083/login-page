<?php
 // include 'dbconnect.php';
 require 'dbconnect.php';
 $sql= "SELECT * FROM `shubh`";
 $result=mysqli_query($connect, $sql);

 $num=mysqli_num_rows($result);
 echo $num;
 echo "records found in the database <br>";
 //while ($row=mysqli_fetch_assoc($result)){
 ?>