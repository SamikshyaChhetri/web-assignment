<?php
$host = "localhost";
$username = "root";
$password = "dbbc4223";
$database = "EcommerceDB";
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
function createCategory($conn, $categoryName, $description)
{
    $stmt = $conn->prepare("INSERT INTO Categories (CategoryName, Description) VALUES (?, ?)");
    $stmt->bind_param("ss", $categoryName, $description);
    if ($stmt->execute()) {
        echo "Category created successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
function listCategories($conn)
{
    $sql = "SELECT CategoryID, CategoryName, Description, CreatedAt FROM Categories";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>Category ID</th>
                    <th>Category Name</th>
                    <th>Description</th>
                    <th>Created At</th>
                </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row['CategoryID'] . "</td>
                    <td>" . $row['CategoryName'] . "</td>
                    <td>" . $row['Description'] . "</td>
                    <td>" . $row['CreatedAt'] . "</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No categories found.";
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create_category'])) {
    $categoryName = $_POST['category_name'];
    $description = $_POST['description'];
    createCategory($conn, $categoryName, $description);
}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    listCategories($conn);
}
$conn->close();
