<?php
session_start();
if (isset($_SESSION['page_views'])) {
    $_SESSION['page_views'] += 1; // Increment the count
} else {
    $_SESSION['page_views'] = 1; // Initialize the count
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page View Counter</title>
</head>

<body>
    <h1>Welcome to the Page View Counter</h1>
    <p>This page has been viewed <?php echo $_SESSION['page_views']; ?> times.</p>
</body>

</html>