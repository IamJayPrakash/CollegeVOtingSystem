<?php
// Start the session (if you're using sessions)
session_start();

// Destroy the session to log the user out (if you're using sessions)
session_destroy();

// Redirect to the admin.html page
header("Location: admin.php");
exit;
?>