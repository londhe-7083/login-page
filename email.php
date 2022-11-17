<?php
$to="shubhamlondhe1583@gmail.com";
$subject="test mail";
$message="hello this is simple email";
$from="shubhamlondhe7083@gmail.com";
$headers="from:$from";

if(mail($to,$subject,$message,$headers)){
    echo"mail sent";
}
else{echo"email failed";}
?>