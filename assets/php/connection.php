<?php
// Database server, usually "localhost" or an IP address for remote servers
define('DB_SERVER', 'localhost');

// Database username
define('DB_USERNAME', 'root');

// Database password
define('DB_PASSWORD', '');

// Name of database to use
define('DB_NAME', 'passman');

// Try connecting to the database
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check the connection
if($conn === false){
    die("ERROR: Could not connect. " . $conn->connect_error);
}
?>
