<?php

$db_hostname = "localhost";
$db_database = "majesty";
$db_username = "root";
$db_password = "";




$Fname = $_REQUEST["fname"];
$Lname = $_REQUEST["lname"];
$Email = $_REQUEST["email"];
$Phone = $_REQUEST["Phone"];
$City = $_REQUEST["City"];
$Address = $_REQUEST["Address"];
$pword = $_REQUEST["pword"];
$id = rand(1, 1000);


echo $Fname;





$db_server = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
if (!$db_server) {
    die("could not connect" . mysqli_connect_error());
}

mysqli_select_db($db_server, $db_database);


$insert = "INSERT INTO signup(ID, FIRST_NAME, LAST_NAME, EMAIL, PHONE, CITY, ADDRESS, PASWORD) 
               VALUES('$id', '$Fname', '$Lname', '$Email', '$Phone', '$City', '$Address', '$pword')";
mysqli_query($db_server, $insert);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>





