<?php
//create a connection 
$conn=mysqli_connect("localhost","root","","dbharry41");

//die if connection was not successfull
if (!$conn){
    die("sorry we failed to connect:".mysqli_connect_error());
}
else
{
    echo"connection was succesful<br>";
}

//create a table in the db
$sql="CREATE TABLE `trip2` ( `sno` INT(12) NOT NULL AUTO_INCREMENT , `name` VARCHAR(6) NOT NULL , `tripdest` VARCHAR(8) NOT NULL , PRIMARY KEY (`sno`))";
$result= mysqli_query($conn,$sql);

//check for the table creation success
if(!$result)
    {echo"the table was not created successfully because of this error --->".mysqli_error($conn);}


else
{echo"the table was created successfully";}
?>
