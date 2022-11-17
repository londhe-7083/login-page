<?php
$fname=$_GET['fname'];
$xml=  die("ERROR: cannot create object");
echo "contents in $fname tabular format: <br><br>";
echo "<table border=1> <tr><th>emp no.</th> <th>Name</th> <th>designnation</th> <th>sal</th></tr>";
foreach($xml-> children() as $books)
{
    $arr=$books->attributes();
    echo"<tr><td> ".$arr["empno"]."</td>";
    echo"<td>".$arr["empnname"]."</td>";
    echo"<td>".$arr["salary"]."</td>";
    echo"<td>".$arr["designation"]."</td></tr>";

}

echo "</table> "
?>
