<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>View Teams</title>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <h1>Teams</h1>
    <table>
        <tr>
            <th>Team ID</th>
            <th>Name</th>
            <th>City</th>
            <th>Country</th>
            <th>Founded</th>
        </tr>
        <?php
        include 'db_connection.php';
        $result = $conn->query("SELECT * FROM Team");
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>{$row['team_id']}</td><td>{$row['name']}</td><td>{$row['city']}</td><td>{$row['country']}</td><td>{$row['founded']}</td></tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No data found</td></tr>";
        }
        ?>
    </table>
</body>
</html>
