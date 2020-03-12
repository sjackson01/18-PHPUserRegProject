<?php # Script 18.3 - config.inc.php 
/* This script:
 * - define constants and settings
 * - dictates how errors are handled
 * - defines useful functions
 */

// Document who created this site, when, why, etc.

// ********************************** //
// ************ SETTINGS ************ //

// Flag variable for site status:
define('LIVE', FALSE);

// Admin contact address:
define('EMAIL', 'Example@example.com');

// Site URL (base for all redirections):
define('BASE_URL', 'http://www.example.com');

// Location of the MySQL connection script: 
define('MYSQL', '/path/to/mysqli_connect');

// Adjust the time zone for PHP 5.1 and greater: 
date_default_timezone_set('American/Chicago');  

// ************ SETTINGS ************ //
// ********************************** //
