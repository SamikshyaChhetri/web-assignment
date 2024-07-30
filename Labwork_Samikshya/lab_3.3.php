<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input Form</title>
    <style>
        body {
            display: flex;
            justify-content: center;
        }

        .form-group,
        button {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <form action="display.php" method="POST">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="gender">Gender:</label>
            <input type="radio" id="male" name="gender" value="Male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="Female">
            <label for="female">Female</label>
        </div>
        <div class="form-group">
            <label for="hobbies">Hobbies:</label>
            <input type="checkbox" id="reading" name="hobbies[]" value="Reading">
            <label for="reading">Reading</label>
            <input type="checkbox" id="traveling" name="hobbies[]" value="Traveling">
            <label for="traveling">Traveling</label>
            <input type="checkbox" id="coding" name="hobbies[]" value="Coding">
            <label for="coding">Coding</label>
        </div>
        <div class="form-group">
            <label for="country">Country:</label>
            <select id="country" name="country">
                <option value="USA">USA</option>
                <option value="Canada">Canada</option>
                <option value="UK">UK</option>
                <option value="Nepal">Nepal</option>
            </select>
        </div>
        <button type="submit">Submit</button>
    </form>
</body>

</html>