<!-- w r p to accept two string and check if strings are equal using stiky form -->
<html> 
    <head><title> string comparison </title> </head>
    <body>
        <?php
         $s1= @$_GET['str1'];
         $s2= @$_GET['str2'];
         ?>
         <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
         String 1:
         <input type="text" name="str1" value="<?php echo $s1 ?>" />
         <br/>
         String 2:
         <input type="text" name="str2" value="<?php echo $s2 ?>" />
         <br/>
         <input  type="submit" name="check equlity" />
</form>
<?php
if(! is_null($s1) && !is_null($s2))
{
    if(strcmp($s1,$s2)==0)
    {
        echo"String are equal";
    }
    else
    {
        echo"String are not equal";
    }
}
?>
</body>
</html>