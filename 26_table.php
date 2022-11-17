<!doctype html>
<html lang ='en'>
    <head>
        <title> Document </title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
</head>
<body style="margin:50px;">
<h2> list of Employees </h2>
<br>
<table class="table">
    <thead>
        <tr>
            <th> ID </th>
            <th> first name </th>
            <th> last name </th>
            <th> email </th>
            <th> phone </th>
            <th> address </th>
            <th>action </th>
       </tr>
</thead>

<tbody>
    <?php
    $servername ="localhost";
    $username = "root";
    $password ="";
    $database = "mystore";
    $connection=new mysqli($servername,$username,$password,$database);

    if ($connection-> connect_error){
        die("connection failed:". $connection->connect_error);

    }
     $sql= "SELECT * FROM employees";
     $result = $connection->query($sql);

     if(!$result){
         die("Invalid query:" .$connection->error);

     }
     while($row= $result->fetch_assoc()){

         echo"<tr>
<td>". $row["id"]."</td>
<td>". $row["first_name"]."</td>
<td>". $row["last_name"]."</td>
<td>". $row["email"]."</td>
<td>". $row["phone"]."</td>
<td>". $row["address"]."</td>


<td>
    <a class='btn-primary btn-sm' href='update'> Update</a>
    <a class='btn-danger btn-sm' href='delete'> Update</a>
</td>
</tr>";
     }
?>
</tbody>
</table>




</body>
</html>

