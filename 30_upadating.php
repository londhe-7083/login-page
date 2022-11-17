
<?php
$servername ="localhost";
$username = "root";
$password = "";
$database = "shubh";

$conn= mysqli_connect($servername,$username,$password,$database); 

if(!$conn)
{
    die('connetion was not succesful');
}

else{
    echo"connetion was succefull";
}

// there are two methods to insert a data in databse
$sql = mysqli_query($conn,"insert into user(id,address) values(2,'ahamednagar')");
// $sql="INSERT INTO `user` (id,name,address) VALUES (1,'shubham','ranchi' )";
// $result = mysqli_query($conn,$sql);

if($sql)
{
    echo " the record has been inserted succefully!<br>";
}

else{
    echo "record was not inserted succeful because of this error--->".mysqli_error($conn);
}

?>