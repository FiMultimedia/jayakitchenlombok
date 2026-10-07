<?php
$dbHost = '127.0.0.1';
$dbUser = 'root';
$dbPass = ''; // Default laragon password is empty
$dbName = 'jayakitchen';

$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
