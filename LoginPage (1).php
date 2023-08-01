<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>

<?php
// Define database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "transport";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize user inputs
function sanitize_input($data) {
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $email = sanitize_input($_POST["email"]);
    $password = sanitize_input($_POST["password"]);

    // Insert user data into the database
    $sql = "INSERT INTO user (email, password) VALUES ('$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "User registered successfully!";
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

<h2>User Registration</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    <label>Email:</label>
    <input type="email" name="email" required><br>

    <label>Password:</label>
    <input type="password" name="password" required><br>

    <input type="submit" value="Register">
</form>

</body>
</html>