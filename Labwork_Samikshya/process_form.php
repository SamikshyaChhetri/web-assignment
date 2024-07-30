<?php
$servername = "localhost";
$username = "root";
$password = "dbbc4223";
$dbname = "student_db";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$stmt = $conn->prepare("INSERT INTO students (name, address, phone, age) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sssi", $name, $address, $phone, $age);
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}
$stmt->close();
$conn->close();
