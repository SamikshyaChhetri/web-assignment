<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retrieve Cookie</title>
</head>

<body>
    <h1>Cookie Retrieval</h1>
    <?php
    if (isset($_COOKIE['user'])) {
        echo "<p>Cookie 'user' is set. Value: " . htmlspecialchars($_COOKIE['user']) . "</p>";
    } else {
        echo "<p>Cookie 'user' is not set.</p>";
    }
    ?>
    <p><a href="lab_3.9_set.php">Set Cookie</a></p>
</body>

</html>