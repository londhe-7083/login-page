        
<?php

 session_start();
 
 if(!isset($_SESSION['id']))
 {  header('location:../');
}
$data=$_SESSION['data'];
if($_SESSION['status']==1) {
$status='<b class="text-success">Voted </b>';
}
else{
$status='<b class="text-danger">Not Voted</b>';
}
?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Voting system -Dashboard</title>
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    




    <!-- css file  -->

    <link rel="stylesheet" href="../css/stylesheet.css">

</head>

<body id="bd">
    <center>
    <div class="container my-5">      
        <a href="../"><button id="backbtn">Back</button></a>
         <a href="logout.php"><button id="logbtn">Logout </button></a>
        <h1 class="sv-3">lead group</h1>
        <marquee>  <h3><ul> <i>this program is written by shubh  this program is written by shubh   this program is written by shubh
          </h3></marquee></ul></i> 
</div>
</center>

        <div id="groupSection">
            
                <?php
if(isset($_SESSION['groups'])){
   $groups=$_SESSION['groups'];
   for ($i=0; $i<count ($groups);$i++) {
        ?>
         <div style="border-bottom:1px solid; margin-bottom:10px; background-color:white">
                    <div class="col-md-4">
                        <img style="float: right" src="../uploads/kolse aniket.jpg <?php echo $groups [$i]['photo'] ?>" alt="Group image" height="80" weidth="80">
                    </div>
                    <div class="sv-8">
                    <b>Group Name : </b><?php echo $groups[$i]['name']?><br><br>
                        <!-- <strong class="text-dark h5"> Group name: </strong> -->
                        <?php echo $groups[$i]['name'] ?>
                        <b>Votes :</b> <?php echo $groups[$i]['votes']?><br><br>
                        <!-- <strong class="text-dark h5"> Votes: </strong> -->
                        
                    </div>
               
   </div>
            
                </div>
                <hr>

                <form action="../actions/voting.php" method="post">
                    <input type="hidden" name="groupvotes" value="<?php echo $groups [$i]['votes'] ?>">
                    <input type="hidden" name="groupid" value="<?php echo $groups [$i]['id'] ?>">
   
                </form>
   </div>
                <?php
}
}
else{
?>

                <div class="container">

                    <p>No groups to display</p>

                </div>

                <?php

}

?>
        
            </div>
        
        </div>