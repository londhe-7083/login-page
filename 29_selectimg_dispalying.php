<?php
$servername="localhost";
$username="root";
$password="";
$database="dbharry3";

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    die("sorry we failed to connect :".mysqli_connect_error());
}
else
{
    echo"connection was succesfull <br><br>";
}
$sql = "SELECT * FROM `user`";
$result = mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
echo "<b> $num </b> "." ";
echo "records found in the DataBase <br><br/>";
  
if($num> 0){
    while($row=mysqli_fetch_assoc($result))
    {
      echo $row ['id'].')  '. "Hello   ". $row ['name'].",  "     ."<b>"."welcome .. "."</b>" .$row['mobile'].'.    '.$row['password'].$row['photo'].$row['status'] ."<br>";
      echo "<br>";
    }
}

?>  