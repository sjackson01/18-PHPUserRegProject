<?php # Script 18.4 - mysqli_connect.php 
// This file contains the database access information
// This file also establishes a connection to MySQL
// and selects the database.

DEFINE('DB_HOST', 'mysql:3306');
DEFINE('DB_USER', 'root');
DEFINE('DB_PASSWORD', 'tiger');
DEFINE('DB_NAME', 'ch18');

// Make the connection:
$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// If no connction could be made, trigger an error:
if (!$dbc){
    trigger_error('Could not connect to MySQL: ' . mysqli_connect_error() );
} else { // Otherwise set the encoding
    mysqli_set_charset($dbc, 'utf8');
}
