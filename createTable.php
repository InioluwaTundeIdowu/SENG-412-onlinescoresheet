<?php
require 'connect.php';

$sql = "CREATE TABLE scoreTable(
    Matric_Number VARCHAR(7) NOT NULL,
    Full_Name VARCHAR(100) NOT NULL,
    SENG406 INT(2) NOT NULL,
    SENG412 INT(2) NOT NULL,
    SENG404 INT(2) NOT NULL,
    SENG408 INT(2) NOT NULL,
    PRIMARY KEY (`Matric_Number`)
)";

if($connection){
    mysqli_select_db($connection, "OnlineScoreDb");
    if(mysqli_query($connection, $sql)){
        echo "scoreTable is created successfully";
    }
    else{ 
        echo "Error creating table: ".mysqli_error($connection);
    }
    mysqli_close($connection);
}

?>