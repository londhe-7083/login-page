<?php
//connecting to the db
$servername ="localhost";
$username = "root";
$password ="";
$database = "dbharry41";

//create a connection 
$conn = mysqli_connect($servername, $username, $password, $database);
//die if connection was not succesful 
if(!$conn){
    die("sorry we failed to connect: ".mysqli_connect_error());
}
else{
    echo"connection was successful<br>";

}
//variable to be inserted into the table 
$sno="";
$name="shubh";
$dest="svl";

// sql query to be executed
$sql="INSERT INTO `trip` (`sno`, `name`, `tripdest`) VALUES ('$sno', '$name', '$dest')";
$result = mysqli_query($conn, $sql);

//add a new trip table in the db
if($result){
    echo "the record has been inserted successfully!<br>";

}

else{
     echo"the record was not inserted succesfully because of this error --->". mysqli_error($conn);

}
?>