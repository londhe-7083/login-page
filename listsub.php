<html>
    <head> 
        <title> personality </title>
</head>
 
<body>
  <!-- <form action = "shu.php" method="POST"> -->
    <from action = <?php echo $_SERVER ['PHP_SELF'] ?> method="POST">
  
    select your personality attributes:
    <select name = "attributes []"  size=5 multiple>
        <option value ="os"> operating system </ooption> 
        <option value = "networks"> coputer networks </option>
        <option value = "tcs"> therotical omputer science </option>
        <option value = "php"> internet program </option>
</select>
<br>
<input type="submit" value="Display"/>
</form>

<?php
 $tech =$_POST ['tech'];
 
 if(is_array($tech)){
   {foreach($tech as $v) 
    echo $v."<br/>";}
  }
  else 
  echo $tech."<br/>";


//    if (array_key_exists('s',$_GET))
//  {
//    $description =join(" " , $_GET['attributes']);
//    echo"you have a slected & $description subjects";
//  }
  ?>
  </body>
  </html> 