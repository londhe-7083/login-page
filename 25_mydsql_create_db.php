<?php 
//creating to the db
// $servername="localhost";
// $username="root";
// $password="";
// $database="online-voting-system"

//create a connection
$conn=mysqli_connect("localhost", "root", "","online-voting-system");


//die if connection was not succesful
if(!$conn){
    die("sorry we failed to connect :".mysql_connect_error());

}
else{
    echo"connection was successful";

}
//create a db
$sql="CREATE DATABASE dbharry41";
$result =mysqli_query($conn,$sql);
echo"<br>";

//check for the db creation success
if($result){
    echo "the db was created successfully! <br>";
   }
else
{
    echo"the db was not created succefully because of this error ---> ".mysqli_error($conn);
}

?>
