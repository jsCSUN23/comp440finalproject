<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>View Players</title>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <h1>Players</h1>
    <form method="GET" action="view_players.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br>
        <label for="team_id">Team ID:</label>
        <input type="number" id="team_id" name="team_id"><br>
        <input type="submit" value="Search">
    </form>

    <table>
        <tr>
            <th><a href="view_players.php?sort=player_id">Player ID</a></th>
            <th><a href="view_players.php?sort=name">Name</a></th>
            <th><a href="view_players.php?sort=team_id">Team ID</a></th>
            <th><a href="view_players.php?sort=position">Position</a></th>
            <th><a href="view_players.php?sort=nationality">Nationality</a></th>
        </tr>
        <?php
        include 'db_connection.php';
        $sort = $_GET['sort'] ?? 'player_id';
        $order = "ORDER BY $sort";
        $query = "SELECT * FROM Player WHERE 1 $order";
        $result = $conn->query($query);
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>{$row['player_id']}</td><td>{$row['name']}</td><td>{$row['team_id']}</td><td>{$row['position']}</td><td>{$row['nationality']}</td></tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No data found</td></tr>";
        }
        ?>
    </table>
</body>
</html>
