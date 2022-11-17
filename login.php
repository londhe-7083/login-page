<?php
session_start();
$_SESSION["tm"] = time();
?>
<from method = "GET" action="new.php">
    Roll No :<input type = "text" name="rno"><br>
    Name :<input type="text" name="nm"><br>
    City:<input type="text" name="ct"><br><br>
    <input type ="submit" value="submit">
</form>