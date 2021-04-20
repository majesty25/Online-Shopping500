<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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


    $db_server = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
    if (!$db_server) {
        die("could not connect" . mysqli_connect_error());
    
    }

    mysqli_select_db($db_server, $db_database);


    ?>
</head>
<body>
    <?php

    $insert = "INSERT INTO signup(ID, FIRST NAME, LAST NAME, EMAIL, PHONE, CITY, ADDRESS, PASWORD) 
               VALUES('$Id', '$Fname', '$Lname', '$Email', '$Phone', '$City', '$Address', '$pword')";
    $result = $db_server->query($insert);

    print($Fname)


    ?>
</body>
</html>