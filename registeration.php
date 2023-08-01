<!DOCTYPE html>
<html>
<head>
    <title><center>Registration Page</center></title>
</head>
<body>
    <h2><center>Registration Page</center></h2>
    <p><strong>Kindly fill the form carefully</strong></p>
    <form method="post" action="register.php">
        <label for="name"><strong>Name:</strong></label>
        <input type="text" name="Name" id="Name" required><br>
        <br>
        
        <label for="email"><strong>Email:</strong></label>
        <input type="email" name="email" id="email" required><br>
        <br>
        
        <label for="password"><strong>Password:</strong></label>
        <input type="password" name="password" id="password" required><br>
        <br>

        <label for="truckcapacity"><strong>Truck Capacity:</strong></label>
        <input type="text" name="truckcapacity" id="truckcapacity" required><br>
        <br>

        <label for="trucknumber"><strong>Truck Number:</strong></label>
        <input type="text" name="trucknumber" id="trucknumber" required><br>
        <br>

        <label for="licensenumber"><strong>License Number:</strong></label>
        <input type="text" name="licensenumber" id="licensenumber" required><br>
        <br>
        
        <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>
