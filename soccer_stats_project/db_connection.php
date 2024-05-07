<?php
$conn = new mysqli('localhost', 'root', 'csun2024@!compsci', 'SoccerStats');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
