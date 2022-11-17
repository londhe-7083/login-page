<?php
     $showAlert= false;
     $showerror= false;
     if($_SERVER["REQUEST_METHOD"]=="POST"){
         include './dbconnect.php';
         $fullname = $_POST["fullname"];
         $username = $_POST["username"];
         $password = $_POST["password"];
         $cpassword= $_POST["Cpassword"];
         //$exists=false;
         $existsql="SELECT * FROM `user1581` WHERE username='$username'";
         $result=mysqli_query($conn,$existsql);
         $numexistrows=mysqli_num_rows($result);
         if($numexistrows > 0)
         {
            // $exists = true;
            $showerror="username already exists";
         }

         else{
            $exists=false;
            if(($password == $cpassword)){ 
                    $sql="INSERT INTO `user1581` (fullname,username,password,date) VALUES ('$fullname','$username', '$password', current_timestamp())";
                    $result=mysqli_query($conn,$sql);
            
                    if ($result)
                    {
                        $showAlert=true;
                        header("location: login.php");
            
                    }
                }
            else{
                $showerror="password do not match";
                $showerror=true;
            }
        }
        
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Registration form </title>
    <link rel="stylesheet" type="text/css" href="./shubh2.css">
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
if($showAlert)
{ 
    echo '<div class="alert" role="alert">
        <strong> success!</strong> your account is now created and you can login 
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true" >&times;</span>
        </button>
    </div>';}

    if($showerror)
    {
    echo '<div class="error" role="alert">
        <strong> error! </strong> your account is not created! [removal.ai]_tmp-6324ac81005ba.png
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true" >&times;</span>
        </button>
    </div>';}

    ?>
    

    
    <div class="registration-form">
        <h1>Registration Form</h1>     
        <form action="./signup.php" method="POST">
            <p>Full Name:</p>
            <input type="text" name="fullname" placeholder="Full name" id="fullname" required>
            <p>User name:</p>
            <input type="text" name="username" placeholder="User name" id="username" required>
            <p>password:</p>
            <input type="password" name="password" placeholder="password" id="password" required>
            <p>confirm password:</p>
            <input type="password" name="Cpassword" placeholder="Cpassword" id="Cpassword" required>
            <button type="submit">Registration</button>
        </form>
    </div>
</body>
</html>