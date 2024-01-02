<?php
session_start();

// Clear browser cache
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Output JavaScript to prevent going back to the previous page
echo '<script>';
echo 'if (window.history.replaceState) {';
echo '  window.history.replaceState(null, null, document.URL);';
echo '}';
echo '</script>';

// Redirect to the login page or any other page after logout
header("Location: ../login/login.php"); // Change "login.php" to your actual login page

exit();
?>
