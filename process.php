<?php
// Define hardcoded admin username and password
$adminUsername = 'admin@gmail.com';
$adminPassword = 'admin123';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get user input
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the provided credentials match the admin credentials
    if ($username === $adminUsername && $password === $adminPassword) {
        // Authentication successful
        // Redirect to another file (if login is correct)
        header('Location: validation.php');
        exit; // Terminate script execution after redirection
    } else {
        // Authentication failed
        session_start();
        $_SESSION['error'] = 'Invalid username or password.';
        header('Location: admin.php');
        exit;
    }
}
?>
