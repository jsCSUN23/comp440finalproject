<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Add Team</title>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <h1>Add New Team</h1>
    <form action="add_team.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br>
        <label for="city">City:</label>
        <input type="text" id="city" name="city"><br>
        <label for="country">Country:</label>
        <input type="text" id="country" name="country"><br>
        <label for="founded">Founded:</label>
        <input type="number" id="founded" name="founded"><br>
        <label for="league_id">League ID:</label>
        <input type="number" id="league_id" name="league_id"><br>
        <input type="submit" value="Add Team">
    </form>
</body>
</html>
