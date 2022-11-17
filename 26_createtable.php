<?php 
//creating to the db
$servername="localhost";
$username="root";
$password="";
$database = "dbharry4";

if(isset($_POST["sub"])){
    $trip = $_POST["trip"];
    $name = $_POST["name"];
    $dest = $_POST["dest"];
    $location = $_POST["location"];


//create a connection
$conn=mysqli_connect($servername, $username, $password, $database);


//die if connection was   not succesful
if(!$conn){
    die("sorry we failed to connect :".mysql_connect_error());

}
else{
    echo"connection was successful";

}
//create a table in db
$sql =" INSERT INTO `trip` (`name`, `dest`, `location`) VALUES ( '$name','$dest' , '$location')";

$result =mysqli_query($conn,$sql);
echo"<br>";

//check for the db creation success
if($result){
    echo "the db was created successfully!<br>";
   }
else
{
    echo"the db was not created succefully because of this error ---> ".mysqli_error($conn);
}

}
?>
