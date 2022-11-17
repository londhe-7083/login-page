<?php
$connect = mysqli_connect("localhost","root","","dbharry4");
if (!$connect)
{
    die("sorry we failed to comnnect :".mysqli_connect_error());}

    else
    echo"connection was sucessfull <br>";
    ?>