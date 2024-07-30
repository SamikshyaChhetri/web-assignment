<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Operators Demo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }

        .output {
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
            width: 50%;
            margin: 20px 0;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: black;
            color: white;
        }
    </style>
</head>

<body>
    <div class="output">
        <h2>PHP Operators Demo</h2>
        <table>
            <thead>
                <tr>
                    <th>Operation</th>
                    <th>Expression</th>
                    <th>Result</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $a = 10;
                $b = 5;
                echo "<tr><td>Addition</td><td>\$a + \$b</td><td>" . ($a + $b) . "</td></tr>";
                echo "<tr><td>Subtraction</td><td>\$a - \$b</td><td>" . ($a - $b) . "</td></tr>";
                echo "<tr><td>Multiplication</td><td>\$a * \$b</td><td>" . ($a * $b) . "</td></tr>";
                echo "<tr><td>Division</td><td>\$a / \$b</td><td>" . ($a / $b) . "</td></tr>";
                echo "<tr><td>Modulus</td><td>\$a % \$b</td><td>" . ($a % $b) . "</td></tr>";
                $c = 10;
                $d = "10";
                echo "<tr><td>Equal</td><td>\$c == \$d</td><td>" . var_export($c == $d, true) . "</td></tr>";
                echo "<tr><td>Identical</td><td>\$c === \$d</td><td>" . var_export($c === $d, true) . "</td></tr>";
                echo "<tr><td>Not Equal</td><td>\$c != \$d</td><td>" . var_export($c != $d, true) . "</td></tr>";
                echo "<tr><td>Not Identical</td><td>\$c !== \$d</td><td>" . var_export($c !== $d, true) . "</td></tr>";
                echo "<tr><td>Greater Than</td><td>\$a > \$b</td><td>" . var_export($a > $b, true) . "</td></tr>";
                echo "<tr><td>Less Than</td><td>\$a < \$b</td><td>" . var_export($a < $b, true) . "</td></tr>";
                echo "<tr><td>Greater Than or Equal</td><td>\$a >= \$c</td><td>" . var_export($a >= $c, true) . "</td></tr>";
                echo "<tr><td>Less Than or Equal</td><td>\$a <= \$b</td><td>" . var_export($a <= $b, true) . "</td></tr>";
                $x = true;
                $y = false;
                echo "<tr><td>AND</td><td>\$x && \$y</td><td>" . var_export($x && $y, true) . "</td></tr>";
                echo "<tr><td>OR</td><td>\$x || \$y</td><td>" . var_export($x || $y, true) . "</td></tr>";
                echo "<tr><td>NOT</td><td>!\$x</td><td>" . var_export(!$x, true) . "</td></tr>";
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>