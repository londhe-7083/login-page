
<!doctype html>
<html lang="en">
          <head>
  <title>registrastion record</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/stylerecord.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
   <link rel="stylesheet" herf="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-10/css/fontawesome.css">

   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

  
</head>

<body>
<audio autoplay="auto">
        <source src="audio/list.mp3" type="audio/mp3">
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
                <a href="welcome.php" onmouseover="back.play()">BACK</a>
                <audio id="back">
        <source src="audio/back.mp3" type="audio/mp3">
    </audio>



                <a href="logout.php" onmouseover="logout.play()">LOGOUT</a>
                <audio id="logout">
        <source src="audio/logout.mp3" type="audio/mp3">
    </audio>




                <a href="index.php" onmouseover="home.play()">HOME</a>

                <audio id="home">
        <source src="audio/home.mp3" type="audio/mp3">
    </audio>



            </div>
        </nav>
        <main>
            <section>
            <div class="logo"><h1><span class="change_content_color"></span></h1></div>
    <div class="main-div">
        <p>only for Admin</p>
        
        <div class="center-div">
            <div class="table responsive">
                <table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>username</th>
                            <th>password</th>
                            <th>created_at</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php

include 'config.php';

$selectquery = "select * from users ";

$query = mysqli_query($conn,$selectquery);

$nums = mysqli_num_rows($query);

while($res = mysqli_fetch_array($query)){
    ?>

                        <tr>
                            <td><?php echo $res['id'] . "<br>";?></td>
                            <td><?php echo $res['username'] . "<br>";?></td>
                            <td><?php echo $res['password'] . "<br>";?></td>
                            <td><?php echo $res['created_at'] . "<br>";?></td>
                           
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