<!DOCTYPE html>
<html>
    <body>
        <h1> 
            <form action="#" method="post">
            User name:<input name="nm"><p>
            Password:<input type=password name="pass"><br>
            <input type="Submit" name="b1" value="Login"><p>
        </h1>
            </form>

<?php
$sum=$_POST['nm'];
$pass=$_post['pass'];

session_start();

session_register('cnt');
if(!isset($_SESSION{'cnt'}))

{
    $_SESSION['cnt']=0;

}

if($nm=="uddhav" && $pass="1234")

{
    echo"congratulation !!!;
}

else{
    echo "you have intered incorrect username or password";
    $_SESSION['cnt']++'
    it($SESSION ['cnt']<3)
}

echob"click <a href='c3.html'> HOME</a>
echo to re the username & passrosword";
}

else{
    echo"sorry";}

    ?>
