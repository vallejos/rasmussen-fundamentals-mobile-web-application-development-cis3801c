<?php
// DB config
$dbHost = 'localhost';
$dbUser = 'dbuser1';
$dbPass = 'Ks4rCc3X8wGM';
$dbName = 'adventureworks';

// Create connection
$dbConn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

// Check connection
if (!$dbConn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>