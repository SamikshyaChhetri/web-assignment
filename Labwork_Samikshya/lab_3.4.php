<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSV Content</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>CSV Content</h1>
    <table>
        <thead>
            <tr>
                <?php
                // Open the CSV file
                if (($handle = fopen("data.csv", "r")) !== FALSE) {
                    // Read the header row
                    if (($header = fgetcsv($handle, 1000, ",")) !== FALSE) {
                        foreach ($header as $col) {
                            echo "<th>{$col}</th>";
                        }
                    }
                    echo "</tr></thead><tbody>";

                    // Read the rest of the rows
                    while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
                        echo "<tr>";
                        foreach ($row as $cell) {
                            echo "<td>{$cell}</td>";
                        }
                        echo "</tr>";
                    }
                    fclose($handle);
                }
                ?>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</body>

</html>