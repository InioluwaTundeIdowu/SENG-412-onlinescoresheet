<?php
$db_host = 'localhost';
$username = 'root';
$password = '';

$conn = mysqli_connect($db_host, $username, $password);

if (!$conn) {
    die("failed to connect:" . mysqli_connect_error());
}
echo "connected successfully!";
?>