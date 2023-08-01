<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "transport";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


function sanitize_input($data) {
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $email = sanitize_input($_POST["email"]);
    $password = sanitize_input($_POST["password"]);

    
    $sql = "INSERT INTO user (name,email,password,truckcapacity,trucknumber,licensenumber) VALUES ('$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "User registered successfully!";
       <meta http-equiv="Refresh" content="0; url='http://localhost/php/save.php' />
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

<h2>User Registration</h2>
<form method="POST"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

<label>Name:</label>
    <input type="name" name="name" required><br>

<label>Email:</label>
    <input type="email" name="email" required><br>

    <label>Password:</label>
    <input type="password" name="password" required><br>

    <label>Truck Capacity:</label>
    <input type="truckcapacity" name="truckcapacity" required><br>

    <label>Truck Number:</label>
    <input type="trucknumber" name="trucknumber" required><br>

    <label>License Number:</label>
    <input type="licensenumber" name="licensenumber" required><br>

    <input type="submit" value="Register">
</form>

</body>
</html>