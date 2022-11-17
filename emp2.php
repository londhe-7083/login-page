<?php
session_start();
echo "Employee deatails";
echo "Employee No:".$HTTP_SESSION_VARS['eno'].'<br>';
echo "Name:".$HTTP_SESSION_VARS['ename'].'<br>';
echo "Address:".$HTTP_SESSION_VARS['addr'].'<br>';
echo "Basic:". $_POST['basic'].'<br>';
echo "DA:". $_POST['da'].'<br>';
echo "HRA:". $_POST['hra'].'<br>';  
echo"Total salary:" .$_POST['basic']+$_POST['da']+$_POST['hra'].'<br>';
?>

