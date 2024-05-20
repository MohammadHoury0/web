<?php
$q = $_GET['q'];

$conn = new mysqli("localhost", 'root', '', 'web');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products WHERE name = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $q);
$stmt->execute();
$result = $stmt->get_result();

$products = [];
while ($row = $result->fetch_assoc()) {
    $products[] =
        $row['name'];
}

echo json_encode($products);

$stmt->close();
$conn->close();
