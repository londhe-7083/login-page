<?php
$servername="localhost";
$username="root";
$password="";
$database="dbharry2";
$conn= mysqli_connect($servername,$username,"",$database);
if(!$conn)
{
    die("Error".mysqli_connect_error());
}

else{}
?>