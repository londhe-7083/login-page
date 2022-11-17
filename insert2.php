<?php
// include './confi.php';<?php
$servername='localhost';
$username='root';
$password='';
$database='dbharry4';

$mysqli=mysqli_connect($servername,$username,$password,$database);

if(!$mysqli)
{
    die('error'.mysqli_connect_error());    
}

else
{
    echo"connected success";
}
?>

<!doctype html>
<html>
<head>
    <title> </title>
</head>
<body>
    <form action="insert2.php" method="post" > 


    name<input type="text" name="name" id="name"><br>
    email<input type="email" name="email" id="email"><br>
    mobile<input type="mobile" name="mobile" id="mobile"><br>
    date<input type="date" name="date" id="date"><br>
    <input type="submit" name="submit">
</form>

  <?php
  if(isset($_POST['submit']))
  {
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $date=$_POST['date'];


    $result=mysqli_query($mysqli,"insert into record(name,email,mobile,date) values('$name','$email','$mobile','$date')");
    
    if($result)
    {
        echo"success";

    }

    else
    {
        echo"failed";
    }
}  


?>

</body>
</html>