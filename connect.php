<?php
$db_host = 'localhost';
$username = 'root';
$password = '';
$db_name= 'OnlineScoreDb';

$conn = mysqli_connect($db_host, $username, $password, $db_name);

if (!$conn) {
    die("failed to connect:" . mysqli_connect_error());
}
else{
echo "connected successfully! </br>";
}

?>