<?php
$conn = new mysqli('localhost', 'root', '', 'cinevivo', 3307);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>