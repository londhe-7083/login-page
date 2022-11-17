<?php
$servername='localhost';
$username='root';
$password='';
$database='dbharry4';

$mysqli=mysqli_connect($servername,$username,$password,$database);

if(!$mysqli)
{
    die('error'.mysqli_connect_error());    
}

else
{
    echo"connected success";
}
?>