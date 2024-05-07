<?php
include 'db_connection.php';
$name = $_POST['name'];
$city = $_POST['city'];
$country = $_POST['country'];
$founded = $_POST['founded'];
$league_id = $_POST['league_id'];

$sql = "INSERT INTO Team (name, city, country, founded, league_id)
        VALUES ('$name', '$city', '$country', $founded, $league_id)";
if ($conn->query($sql) === TRUE) {
    echo "New team added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
