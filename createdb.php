<?php
require 'connect.php';

$sql = "CREATE DATABASE OnlineScoreDb";
if($conn){
    if (mysqli_query($conn, $sql)) {
        echo "Database created successfully";
    }
    else {
        echo "Error creating database: ".mysqli_error($conn);
    }
    mysqli_close($conn);
}

?>