<?php
require 'connect.php';

$db_host = 'localhost';
$username = 'root';
$password = '';
$db_name= 'OnlineScoreDb';

$connection=mysqli_connect($db_host, $username, $password, $db_name);

$sql = "CREATE TABLE scoreTable(
    Matric_Number VARCHAR( 10 ) NOT NULL,
    Full_Name VARCHAR( 30 ) NOT NULL,
    SENG406 INT( 2 ) NOT NULL,
    SENG412 INT( 2 ) NOT NULL,
    SENG404 INT( 2 ) NOT NULL,
    SENG408 INT( 2 ) NOT NULL,
    PRIMARY KEY ( `Matric_Number` )
)";

if($connection){
    mysqli_select_db($connection, "OnlineScoreDb");
    if(mysqli_query($connection, $sql)){
        echo "Table Score is created successfully";
    }
    else{ 
        echo "Error creating table: ".mysqli_error($connection);
    }
    mysqli_close($connection);
}

?>