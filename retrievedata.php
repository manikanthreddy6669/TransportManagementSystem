<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "transport";


$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
die('Could not connect to MySQL: ' . mysqli_connect_error());
}

$conn = mysqli_connect("localhost", "root", "", $db);
$sql = "SELECT * FROM loaddetails";

$result = mysqli_query($conn, $sql);
 echo "<h2>Load details</h2>";

while ($row = mysqli_fetch_assoc($result)) {
 

 echo "ID:".$row["key"]."&nbsp";
 echo "departure: ". $row["departure"]."&nbsp";
 echo "destination: ". $row["destination"]."&nbsp";
 echo "weight: ". $row["weight"]."&nbsp";
 echo "quotation: ". $row["quotation"]."&nbsp";
 echo "date: ". $row["date"] . "</table>"."&nbsp<br>";
}

?>
