<?php
//select and database from table
$servername="localhost";
$username="root";
$password="";
$database="online-voting-system";
//create connection 
$conn=mysqli_connect($servername,$username,$password,$database);
//die if connection was not succesful
if(!$conn)
{die("sorry we failed to connect:".mysqli_connect_error());
}

else{echo"connection was successfull<br><br>";}
$sql="SELECT * from `user`";
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
echo $num;
echo"records found in the database <br><br/>";

if($num>0){
    while($row=mysqli_fetch_assoc($result))
{echo $row['id'].')  '."hello".'  '.$row['name'].'  '."welcome".'  '.$row['mobile']."<br><br>"; }

}