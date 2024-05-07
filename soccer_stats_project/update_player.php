<?php
include 'db_connection.php';

try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Retrieve and validate form data
        $player_id = filter_var($_POST['player_id'] ?? null, FILTER_VALIDATE_INT);
        $name = filter_var($_POST['name'] ?? '', FILTER_SANITIZE_STRING);
        $birthdate = filter_var($_POST['birthdate'] ?? '', FILTER_SANITIZE_STRING);
        $position = filter_var($_POST['position'] ?? '', FILTER_SANITIZE_STRING);
        $nationality = filter_var($_POST['nationality'] ?? '', FILTER_SANITIZE_STRING);
        $team_id = filter_var($_POST['team_id'] ?? null, FILTER_VALIDATE_INT);

        // Validate required fields
        if ($player_id === false || empty($name) || empty($birthdate) || $team_id === false) {
            throw new Exception("Please fill all required fields.");
        }

        // Update Player information
        $sql = "UPDATE Player SET name='$name', birthdate='$birthdate', position='$position', nationality='$nationality', team_id=$team_id WHERE player_id=$player_id";
        if ($conn->query($sql) === TRUE) {
            echo "Player updated successfully";
        } else {
            throw new Exception("Error: " . $conn->error);
        }
    } else {
        throw new Exception("Invalid access method");
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

$conn->close();
?>

