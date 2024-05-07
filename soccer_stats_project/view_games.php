<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>View Games</title>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <h1>Games</h1>
    <form method="GET" action="view_games.php">
        <label for="team_id">Team ID:</label>
        <input type="number" id="team_id" name="team_id"><br>
        <label for="date">Date:</label>
        <input type="date" id="date" name="date"><br>
        <input type="submit" value="Search">
    </form>

    <table>
        <tr>
            <th><a href="view_games.php?sort=game_id">Game ID</a></th>
            <th><a href="view_games.php?sort=date">Date</a></th>
            <th><a href="view_games.php?sort=home_team_id">Home Team</a></th>
            <th><a href="view_games.php?sort=away_team_id">Away Team</a></th>
            <th><a href="view_games.php?sort=league_id">League ID</a></th>
        </tr>
        <?php
        include 'db_connection.php';
        $sort = $_GET['sort'] ?? 'game_id';
        $order = "ORDER BY $sort";
        $query = "SELECT * FROM Game WHERE 1 $order";
        $result = $conn->query($query);
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>{$row['game_id']}</td><td>{$row['date']}</td><td>{$row['home_team_id']}</td><td>{$row['away_team_id']}</td><td>{$row['league_id']}</td></tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No data found</td></tr>";
        }
        ?>
    </table>
</body>
</html>
        