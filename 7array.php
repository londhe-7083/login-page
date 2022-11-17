<?php
  $friend=array("rohan","shubham","ashay","harry");
  print_r($friend);
  echo("<br>");
print_r ('to print  values with srno:-');
$friend[]='abhishek'; //adding the value with end of array
echo"<br>";
print_r($friend);
echo"<br><br>";
//echo var_dump($friend);

$size=sizeof($friend); // to using count or size of funtion
echo "the size of the array is:-$size";
echo"<br><br>";

echo "to print the values with for loop:- <br>";
foreach($friend as $shoo){
    echo $shoo."\n<br>";
}
  ?>