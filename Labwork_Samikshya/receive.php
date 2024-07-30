<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receive Data</title>
</head>

<body>
    <h1>Received Data</h1>
    <?php
    if (isset($_GET['name']) && isset($_GET['age'])) {
        $name = htmlspecialchars($_GET['name']);
        $age = htmlspecialchars($_GET['age']);
        echo "<p>Name: " . $name . "</p>";
        echo "<p>Age: " . $age . "</p>";
    } else {
        echo "<p>No data received.</p>";
    }
    ?>
    <p><a href="lab_3.11.send.php">Go back</a></p>
</body>

</html>