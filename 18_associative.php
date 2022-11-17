// this is array first program 
<?php
//adding a element in array
echo'welcome to indexed array:- <br>';
//$arr=array('this','that','what'); //this is are not allowde in arrray printing
echo $arr;
$arr[]='why'; // adding element syntax
echo $arr[0]."<br>"; //printing a array
echo $arr[1]."<br>";
echo $arr[2]."<br>";
echo $arr[3]."<br>";


echo"<br>";

$size=count($arr);
//acess array element throuh for loop
echo"<br> the size of array is:- $size <br>";
for($i=0; $i<count($arr); $i++)
{
    $ele=$arr[$i];
    echo"$ele\n<br>";
  
}

echo'welcome to associative array';
$favcol=array('shubham' => 'red','rohan'=> 'green','harry' =>  'brown','shubh' => 'this');
$favcol[]='blue';
foreach($favcol as $key=>$value)
    echo"<br> favroute color of $key is $value <br>";

?>