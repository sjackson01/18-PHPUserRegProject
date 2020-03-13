<?php # Script 18.9 - logout.php
// This is the logout page for the site
require ('inc/config.inc.php');
$page_title = 'Logout';
include('inc/header.php');

// If no first_name session variable exists, redirect the user: 
if (!isset($_SESSION['first_name'])){

    $url = BASE_URL . 'index.php'; // Define the URL. 
    ob_end_clean(); // Delete the buffer.
    header("Location: $url");
    exit(); // Quit the script. 
} else { // Log out the user. 

    $_SESSION = []; // Destory the variables 
    session_destroy(); // Destroy the session itself.
    setcookie(session_name(), '', time() -3600); // Destory the cookie. 

}

// Print a customized message: 
echo '<h3>You are now logged out. </h3>';

include('inc/footer.php');
