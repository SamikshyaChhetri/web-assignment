<?php
$host = "localhost";
$username = "root";
$password = "dbbc4223";
$database = "EcommerceDB";
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
function createProduct($conn, $productName, $description, $price, $categoryId)
{
    $stmt = $conn->prepare("INSERT INTO Products (ProductName, Description, Price, CategoryID) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssdi", $productName, $description, $price, $categoryId);
    if ($stmt->execute()) {
        echo "Product created successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}
function listProductsByCategory($conn, $categoryId)
{
    $sql = "SELECT ProductID, ProductName, Description, Price, CreatedAt FROM Products WHERE CategoryID = ? ORDER BY CreatedAt DESC";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $categoryId);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Created At</th>
                </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row['ProductID'] . "</td>
                    <td>" . $row['ProductName'] . "</td>
                    <td>" . $row['Description'] . "</td>
                    <td>" . $row['Price'] . "</td>
                    <td>" . $row['CreatedAt'] . "</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No products found in this category.";
    }
    $stmt->close();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create_product'])) {
    $productName = $_POST['product_name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $categoryId = $_POST['category_id'];
    createProduct($conn, $productName, $description, $price, $categoryId);
}
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['category_id'])) {
    $categoryId = $_GET['category_id'];
    listProductsByCategory($conn, $categoryId);
}
$conn->close();
