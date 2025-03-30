<?php
// Initialize the database connection
$db = mysqli_connect('localhost', 'username', 'password', 'database_name');

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

// Your SQL query here

// Close the database connection
mysqli_close($db);
?>
