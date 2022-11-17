<html>
    <head>
        <title> Greet User</title></head>
        <body>
            <?php
              if(isset($_GET['name1']))
              {
                  $nm=$_GET['name1'];
                  echo "hello".$nm;

              }
               else{
                  ?>
                  <from action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
                        Enter Your Name:
                        <input type="text" name="name1"> <br>
                        <input type="submit" name="ok">
              </from>
              <?php 
              }
              ?>
              </body>
              </html>

              