
<!doctype html>
<html lang="en">
          <head>
  <title>Entrise record</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/record.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
   <link rel="stylesheet" herf="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-10/css/fontawesome.css">

   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

  
</head>

<body>
<audio autoplay="auto">
        <source src="audio/pep.mp3" type="audio/mp3">
    </audio>
    <header>
    <div class="area" >
            <ul class="circles">
            <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    
            
    <nav>
            <div class="logo"><h1><span class="change_content"></span></h1></div>
           
            <div class="menu">
                <a href="#"></a>
                <a href="insert.php">BACK</a>
                <a href="index.php">HOME</a>
                <a href="logout.php">LOGOUT</a>

            </div>
        </nav>
        <main>
            <section>
            <div class="logo"><h1><span class="change_content_color"></span></h1></div>
    <div class="main-div">
        <from action="" method="get">
            <div class="from-group">
            TO : <input="date" name="to" class="from-control" required>
</div>
            <div class="from-group">
            From : <input="date"  class="btn btn-primary" name="to" class="from-control" required>
</div>
<div class="from-group">
    <div class="col-sm-10 col-sm-offset-2">
        <button type="submit" class="btn btn-primary" name="search">Search Record By Date</button>
        <a href="showinsert.php?date=<?php echo date('d-m-y'); ?>" class="btn btn-primary">Today</a>
        <a href="showinsert.php?date=<?php echo date('d-m-y',strtotime("-1 days")); ?>" class="btn btn-primary">Yesterday</a>
    </div>
</div>

        </from>
        
        <div class="center-div">
            <div class="table responsive">
                <table border="3">
                    <thead>
                        <tr>
                            <th>BANGLO NO.</th>
                            <th>NAME</th>
                            <th>CAR/BIKE NO.</th>
                            <th>IN TIME</th>
                            <th width="auto">IN DATE</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                  

include 'config.php';




$selectquery = "select * from record ";

$query = mysqli_query($conn,$selectquery);

$nums = mysqli_num_rows($query);


while($ress = mysqli_fetch_array($query)){
    ?>

                        <tr>
                            <td><?php echo $ress['BANGLO.NO'] . "<br>";?></td>
                            <td><?php echo $ress['NAME'] . "<br>";?></td>
                            <td><?php echo $ress['CAR_NO'] . "<br>";?></td>
                            <td><?php echo $ress['IN_TIME'] . "<br>";?></td>
                            <td><?php echo $ress['date'] . "<br>";?></td>
                           
                        </tr>
                        <?php
}
?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    </section>
    </main>
    </ul>
    </div >
</header>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>