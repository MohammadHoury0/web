<?php
$q = strtolower($_GET['q']);

$conn = new mysqli("localhost", 'root', '', 'web');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name FROM products WHERE LOWER(name) LIKE ?";
$stmt = $conn->prepare($sql);
$searchTerm = "%" . $q . "%";
$stmt->bind_param("s", $searchTerm);
$stmt->execute();
$result = $stmt->get_result();

$products = [];
while ($row = $result->fetch_assoc()) {
    $products[] = $row['name'];
}

echo json_encode($products);

$stmt->close();
$conn->close();
