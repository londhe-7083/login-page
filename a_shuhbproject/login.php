<?php
     $login= false;
     $showerror= false;
     if($_SERVER["REQUEST_METHOD"]=="POST"){
         require './dbconnect.php';
         $username = $_POST["username"];
         $password = $_POST["password"];
        
      
     $sql=mysqli_query($conn," SELECT * FROM  user1581 where username='$username'   AND  password='$password'") ;
     $num=mysqli_num_rows($sql);
      if($num == 1)
      { 
         $login=true;
         session_start();
         $_SESSION['loggedin'] =true;
         $_SESSION['username'] =$username;
         header("location: welcome2.php");
     }
    
      else{
         $showerror="Invalid creadentials";
         
         }
        }   
     
     ?>


<!DOCTYPE html>
<html>
    <head>
    <title>Login Form </title>
    <link rel="stylesheet" type="text/css" href="./shubh.css">
</head>
<body>
      <div class="hero">
        <nav>
            <h2 class="logo">sv <span>londhe</span></h2>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="#">Signup</a></li>
                <li><a href="#">Logout</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            <button type:"submit" class="but">subscribe</button>
        </nav>
    </div>
<?php
if($login)
{ 
    echo '<div class="alert" role="alert">
        <strong> success!</strong> you are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true" >&times;</span>
        </button>
    </div>';}

    if($showerror)
    {
    echo '<div class="error" role="alert">
        <strong> error! </strong> invalid credentials 
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true" >&times;</span>
        </button>
    </div>';}

    ?>
    <div class="login-form">
        <h1>login form</h1>
        <form action="welcome2.php" method="post">
            <p>User Name</p>
            <input type="text" name="username" placeholder="User name" id="username" required>
            <p>Password</p>
            <input type="password" name="password" placeholder="Password" id="password" required>
            <button type="submit"> Login </button>

        </form>
    </div>
</body>
</html>

