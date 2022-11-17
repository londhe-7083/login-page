<?php
$num=array(100, 200);
print_r($num);
echo"<br>";
$num=array_pad($num,-5,0);
print_r($num);
echo"<br>";
var_dump ($num);
echo"<br>";
// print($num);
//echo"$num";
echo"<br><br>";
foreach($num as $str)
{
    echo" $str";
}
?>