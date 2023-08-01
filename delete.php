<?php

$servername = "localhost";
$username = "root";
$pass = "";
$database = "transport";


$conn = mysqli_connect($servername, $username, $pass, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$table = "loaddetails";

$id = 1;

// SQL query to update data
$sql = "DELETE FROM $table WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    echo "deleted successfully";
} else {
    echo "Error updating data: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>
