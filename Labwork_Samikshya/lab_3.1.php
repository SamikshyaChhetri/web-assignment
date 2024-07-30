<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Divide by Zero Exception Handling</title>
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
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
            width: 50%;
        }
    </style>
</head>

<body>
    <div class="output">
        <?php
        class DivideByZeroException extends Exception
        {
            public function errorMessage()
            {
                return "Error: Division by zero.";
            }
        }
        function divide($numerator, $denominator)
        {
            if ($denominator == 0) {
                throw new DivideByZeroException();
            }
            return $numerator / $denominator;
        }
        try {
            $numerator = 10;
            $denominator = 0;
            $result = divide($numerator, $denominator);
            echo "Result: $result";
        } catch (DivideByZeroException $e) {
            echo $e->errorMessage();
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
        ?>
    </div>
</body>

</html>