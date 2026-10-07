<?php
$conn = @new mysqli('127.0.0.1', 'root', '');
if ($conn->connect_error) {
    echo "127.0.0.1 failed: " . $conn->connect_error . "\n";
} else {
    echo "127.0.0.1 success!\n";
}

$conn2 = @new mysqli('localhost', 'root', '');
if ($conn2->connect_error) {
    echo "localhost failed: " . $conn2->connect_error . "\n";
} else {
    echo "localhost success!\n";
}
?>
