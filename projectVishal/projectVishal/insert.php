<?php
include("config.php");

?>

<!doctype html>
<html lang="en">
  <head>
  <style>
@import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Cinzel+Decorative:wght@900&family=Ewert&family=Josefin+Sans:wght@100&family=Rubik+Beastly&display=swap');
</style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="css/record.css" rel="stylesheet">
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/record.css" rel="stylesheet">
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <title>people entries</title>
  </head>
  <body>
  <audio autoplay="auto">
        <source src="audio/ent.mp3" type="audio/mp3">
    </audio>
      <header>
  <nav>
            <div class="logo"><h1><span class="change_content"></span></h1></div>
            <div class="menu">
                <a href="https://www.google.com/maps/place/Jeevan+Rang+Farms/@19.020824,74.6747183,15z/data=!4m5!3m4!1s0x0:0xdeb4a3e1095093a8!8m2!3d19.020824!4d74.6747183" target="_blank">Location</a>
                <a href="showinsert.php">show Entrise</a>
                <a href="login.php">LOGIN</a>
                <a href="index.php">HOME</a>
            </div>
        </nav>

<div class="container mt-4">
<h3>Enter Entrise Here :-</h3>
<hr>
<form action="" method="post">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputNO">BANGLO NO. :</label>
      <input type="text" class="form-control" name ="inputno"  placeholder="BANGLO NO. J1 TO J19">
    </div>
    <div class="form-group col-md-12">
      <label for="inputname">NAME :</label>
      <input type="text" class="form-control" name ="inputname" id="name" placeholder="NAME">
    </div>
  </div>
  <div class="form-group">
      <label for="inputcar_no">CAR / BIKE NO :</label>
      <input type="text" class="form-control" name ="inputcar_no" placeholder="car / bike no">
    </div>
  <div class="form-group">
    <label for="inputtime"> IN TIME : </label>
    <input type="time" class="form-control" name ="inputtime" placeholder="IN TIME">
  </div>
  <div class="form-group">
    <label for="inputdate"> DATE : </label>
    <input type="date" class="form-control" name="inputdate" placeholder="DATE">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">SAVE</button>
  <!-- <input type="submit" name="submit"> -->
</form>
</div>
<?php
if(isset($_POST['submit']))
{
    $banglono=$_POST['inputno'];
    $name=$_POST['inputname'];
    $carno=$_POST['inputcar_no'];
    $time=$_POST['inputtime'];
    $date=$_POST['inputdate'];

    $result=mysqli_query($conn,"INSERT into record values('','$banglono','$name','$carno','$time','$date')");
   
    if($result)
    {
        echo "Success";

    }
    
        else{
            echo "Failed";
        }
    }
?>

</header>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>