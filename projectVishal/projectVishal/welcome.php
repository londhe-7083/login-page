<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/stylewelcome.css" rel="stylesheet">
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
   
    <title>welcome</title>
  </head>
  <body>
  <audio autoplay="auto">
        <source src="audio/login.mp3" type="audio/mp3">
    </audio>
      <header>
      <nav>
            <div class="logo"><h1><span class="change_content"></span></h1></div>
            <div class="menu">
                <a href="https://www.google.com/maps/place/Jeevan+Rang+Farms/@19.020824,74.6747183,15z/data=!4m5!3m4!1s0x0:0xdeb4a3e1095093a8!8m2!3d19.020824!4d74.6747183" target="_blank">Location</a>
                <a href="#"></a>
                <a href="gallery.php">Photos</a>
                <a href="logout.php">LOGOUT</a>
            </div>
        </nav>
      
<div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome ". $_SESSION['username']?></a>
      </li>
  </ul>
  </div>


<div class="container mt-4">
<h3><?php echo "Welcome ". $_SESSION['username']?>! You can now use this website</h3>
<hr>

</div>
<div>
<a href="insert.php"><button class="btn btn-primary">INSERT Entry RECORD</button></a><br>
<a href="recordlist.php"><button class="btn btn-primary">Login Record</button></a>
</div>
</header>
</body>
</html>