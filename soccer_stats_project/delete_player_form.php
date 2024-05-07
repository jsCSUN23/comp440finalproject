<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Delete Player</title>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <h1>Delete Player</h1>
    <form action="delete_player.php" method="post">
        <label for="player_id">Player ID:</label>
        <input type="number" id="player_id" name="player_id"><br>
        <input type="submit" value="Delete Player">
    </form>
</body>
</html>
