<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "cinevivo";

$conn = new mysqli($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}
?>