<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Ladderr_db";

  
    $connection = new mysqli($servername, $username,$password, $dbname);


    if($connection->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
    else{
        echo "Connection success";
    }


?>