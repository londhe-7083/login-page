<?php 
 
 $servername="localhost";
 $username="root";
 $password="";
 $database="dbharry2";

 $conn = mysqli_connect($servername,$username,$password,$database);

 if(!$conn)
 {
    die("sorry we failed to connect: <br>". mysqli_connect_error() );
 }

 else{
    echo "connection was succesfully <br>";
 }

 $sql = "SELECT * FROM `user1581`";
 $result = mysqli_query($conn, $sql);

 $num = mysqli_num_rows($result);
 echo $num;
 echo "records found in database<br>";

 if($num>0){

    while($row = mysqli_fetch_assoc($result)){

      echo var_dump($row);
      echo"<br>";
    }
 }



 ?>