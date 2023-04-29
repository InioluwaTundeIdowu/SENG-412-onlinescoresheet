<?php
// Connect to the database
include 'connect.php';

mysqli_select_db($conn, $db_name);

// Get the form data
$matric_number = $_POST['matric_number'];
$full_name = $_POST['fullname'];
$seng406 = $_POST['seng406'];
$seng412 = $_POST['seng412'];
$seng404 = $_POST['seng404'];
$seng408 = $_POST['seng408'];

// Insert the data into the database
$sql = "INSERT INTO scoreTable (matric_number, full_name, seng406, seng412, seng404, seng408) VALUES ('$matric_number', '$full_name', '$seng406', '$seng412', '$seng404', '$seng408')";

if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
