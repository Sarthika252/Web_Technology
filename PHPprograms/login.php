<?php
// Start the session
session_start();

// Sample hardcoded credentials (for demonstration purposes)
$username = 'user';
$password = 'password';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get input values from the login form
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    // Check if credentials match
    if ($input_username === $username && $input_password === $password) {
        // Set session variables if login is successful
        $_SESSION['username'] = $input_username;
        $_SESSION['logged_in'] = true;
        header('Location: wel.php'); // Redirect to the welcome page
        exit();
    } else {
        echo "Invalid login credentials!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>
