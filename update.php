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
$update = "quotation";

$new= "12000";

$id = 1;

// SQL query to update data
$sql = "UPDATE $table SET $columnToUpdate = '$newValue' WHERE id = $1";

if (mysqli_query($conn, $sql)) {
    echo "Data updated successfully";
} else {
    echo "Error updating data: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>
