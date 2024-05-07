<?php
include 'db_connection.php';

try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Retrieve and validate the player ID
        $player_id = filter_var($_POST['player_id'] ?? null, FILTER_VALIDATE_INT);

        if ($player_id === false) {
            throw new Exception("Invalid player ID");
        }

        // Delete Player
        $sql = "DELETE FROM Player WHERE player_id=$player_id";
        if ($conn->query($sql) === TRUE) {
            echo "Player deleted successfully";
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

