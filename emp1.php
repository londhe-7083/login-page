<?php
session_start();
SESSION_register('$eno');
SESSION_register('$ename');
SESSION_register('$addr');
$eno=$_POST['eno'];
$ename=$_POST['ename'];
$addr=$_POST['addr'];
?>
<from method='post' action='emp2.php'>
    <pre>
        employee Basic <input type="text" name="basic"><br>
        DA<input type="text" name="da"><br>
        HRA<input type ="text" name="hra"><br>
        <input type="submit"> <input type ="reset">
</from>



