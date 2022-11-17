<?php
$connect=mysqli_connect("Localhost","root","","dbharry2");

if(!$connect)
{die('couldnot'.mysql_error());}

else
echo"connected <br>";

if(isset($_POST['submit']))
{
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];

$result=mysqli_query($connect,"insert into user(name,lastname,email) values('$name','$lastname','$email')");
if($result)
{
    echo  "registration successfully";
    
}
else
{echo"error";}
}
?>
