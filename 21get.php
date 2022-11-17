<!Doctype html>
<?php
         if(isset($_POST["save"]) )
             {
              echo "welcome". $_POST['name']."<br>";
              print_r ($_POST['age']."years old");
              }
    ?>
<html>
   <head>
    <title> form page </title>
     <body>
        <div>
            <form action="<?php $_PHP_SELF?>" method="POST">
           Name: <input type="text" name="name" >

           Age: <input type="text" name="age" >

         <input type="submit" name="save" value="ok">
         </from>
        </div>

    </body>
</html>
