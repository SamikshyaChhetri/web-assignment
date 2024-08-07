<?php
// Start a session
session_start();

// Hardcoded credentials for demonstration
$valid_username = 'user';
$valid_password = 'pass';

// Initialize error message variable
$error_message = '';

// Handle logout
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header('Location: login.php');
    exit();
}

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate credentials
    if ($username === $valid_username && $password === $valid_password) {
        // Set session variable and redirect to welcome page
        $_SESSION['loggedin'] = true;
        header('Location: login.php?welcome=true');
        exit();
    } else {
        // Set error message
        $error_message = 'Invalid username or password.';
    }
}

// Check if user is logged in and show welcome message
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    if (isset($_GET['welcome'])) {
        echo "<h2>Welcome to the Dashboard!</h2>";
        echo "<p>You are logged in.</p>";
        echo "<a href='login.php?logout=true'>Logout</a>";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h2>Login</h2>

    <?php if ($error_message) echo "<p style='color: red;'>$error_message</p>"; ?>

    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>
</body>

</html>