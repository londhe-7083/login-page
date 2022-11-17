<?php
include './confi.php';

$sql="INSERT INTO `phptrip` (`trip`, `name`, `dest`, `location`) VALUES ('3', 'sh', 'ch', '254561')";
$result=mysqli_query($conn, $sql);
if($result)
{
    echo"the record has been inserted succesfully";
}

else{
    echo" record was not inserted succesfully------>".mysqli_error($conn);

}





    


?>

