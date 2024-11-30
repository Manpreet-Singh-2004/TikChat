<!-- <?php
$db_hostname = 'localhost';
$db_database = 'school';
$db_username = 'root';
$db_password = '';
$con = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);
if(mysqli_connect_errno())
    echo"Failed to connect to MYSQL: ". mysqli_connect_errno();
?> -->





<?php
// Database credentials
$db_hostname = 'localhost';
$db_database = 'school';
$db_username = 'root';
$db_password = '';

// Establishing the database connection
$con = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

// Check for connection errors
if (!$con) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

// Optional: Set the charset to ensure proper handling of special characters
mysqli_set_charset($con, 'utf8mb4');
?>
