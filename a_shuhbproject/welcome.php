<?php
session_start();
 
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    // header("location: login.php");
    exit;
}


  ?>
  <!DOCTYPE html>
  <html>
    <head>
        <title>  
            welcome - <?php  $_SESSION['username']?>
        </title>
        <link rel="stylesheet" type="text/type" href="./shubh3.css">
    </head>
    <body>

    <?php include 'nav.php'; ?>
        welcome 
    <?php echo $_SESSION['username']?>
    </body>
    </html>
