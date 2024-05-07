<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Update Player</title>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <h1>Update Player</h1>
    <form action="update_player.php" method="post">
        <label for="player_id">Player ID:</label>
        <input type="number" id="player_id" name="player_id"><br>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br>
        <label for="birthdate">Birthdate:</label>
        <input type="date" id="birthdate" name="birthdate"><br>
        <label for="position">Position:</label>
        <input type="text" id="position" name="position"><br>
        <label for="nationality">Nationality:</label>
        <input type="text" id="nationality" name="nationality"><br>
        <label for="team_id">Team ID:</label>
        <input type="number" id="team_id" name="team_id"><br>
        <input type="submit" value="Update Player">
    </form>
</body>
</html>
