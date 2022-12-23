<?php
require ("connectDB.php");

echo "<br><h1>Found<h1>";


    $sql3 = "SELECT count(*) as count FROM myTable";
    $result3 = $conn->query($sql3);

    $data=$result3->fetch_assoc();

    if($data["count"] > 0)
    {
        $sql2 = "SELECT * FROM myTable";
        $result = $conn->query($sql2);
        echo "has records";
        while ($row = $result->fetch_assoc())
        {
            echo "<br>". $row["id"] . " - " . $row["name"] . "<br>";
        } 
    }
    else
    {
        echo "no records";
    }

    $conn->close();
    
?>