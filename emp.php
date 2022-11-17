<!-- write a php script to employee details (eno,ename,add) on first page on second page accept earning (basic,da,hra) on third page print employee information (eno,ename,add,basic,da,hra,total) -->
<?php
session_start();
session_register('eno');
session_register('ename');
session_register('addr');
$eno=$_POST['eno'];
$ename=$_POST['ename'];
$addr=$_POST['addr'];
?>
<form method='POST' action='emp2.php'>
    <pre>
        employee basic<input type="text" name="basic"><br>
        DA<input type="text" name="da"><br/>
        HRA<input type="text" name="hra"><br/>
        <input type="submit"><input type="reset">
</form>     

