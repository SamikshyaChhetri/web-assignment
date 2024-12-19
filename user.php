<?php
$host = "localhost";
$username = "root";
$password = "dbbc4223";
$database = "EcommerceDB";

// Connect to the database
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to handle user registration
function registerUser($conn, $firstName, $lastName, $email, $password, $phoneNumber, $address)
{
    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO Customers (FirstName, LastName, Email, PasswordHash, PhoneNumber, Address) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $firstName, $lastName, $email, $hashedPassword, $phoneNumber, $address);

    // Execute the query
    if ($stmt->execute()) {
        echo "User registered successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

// Function to list all users
function listUsers($conn)
{
    $sql = "SELECT CustomerID, FirstName, LastName, Email, PhoneNumber, Address, CreatedAt FROM Customers";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>Customer ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Created At</th>
                </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row['CustomerID'] . "</td>
                    <td>" . $row['FirstName'] . "</td>
                    <td>" . $row['LastName'] . "</td>
                    <td>" . $row['Email'] . "</td>
                    <td>" . $row['PhoneNumber'] . "</td>
                    <td>" . $row['Address'] . "</td>
                    <td>" . $row['CreatedAt'] . "</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No users found.";
    }
}

// Handle requests
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Register a new user
    if (isset($_POST['register'])) {
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phoneNumber = $_POST['phone_number'];
        $address = $_POST['address'];

        registerUser($conn, $firstName, $lastName, $email, $password, $phoneNumber, $address);
    }

    // Display all users when "View All Users" is clicked
    if (isset($_POST['view_users'])) {
        listUsers($conn);
    }
}

// Close the connection
$conn->close();
