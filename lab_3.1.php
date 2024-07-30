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
    </style>
</head>

<body>
    <div class="output">
        <?php
        // Custom exception class for Divide by Zero
        class DivideByZeroException extends Exception
        {
            public function errorMessage()
            {
                // Error message
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
            // Handle divide by zero exception
            echo $e->errorMessage();
        } catch (Exception $e) {
            // Handle any other exceptions
            echo "Error: " . $e->getMessage();
        }
        ?>
    </div>
</body>

</html>