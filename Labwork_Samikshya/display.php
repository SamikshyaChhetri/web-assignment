<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display User Input</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 50vh;
            text-align: center;
        }

        .output {
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
            width: 50%;
            margin: 20px 0;
        }
    </style>
</head>

<body>
    <div class="output">
        <h2>User Submitted Information</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $gender = htmlspecialchars($_POST['gender']);
            $hobbies = isset($_POST['hobbies']) ? $_POST['hobbies'] : [];
            $country = htmlspecialchars($_POST['country']);

            echo "<p><strong>Name:</strong> $name</p>";
            echo "<p><strong>Gender:</strong> $gender</p>";
            echo "<p><strong>Hobbies:</strong> " . implode(", ", $hobbies) . "</p>";
            echo "<p><strong>Country:</strong> $country</p>";
        } else {
            echo "<p>No data received.</p>";
        }
        ?>
    </div>
</body>

</html>