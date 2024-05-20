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
    $products[] = [
        'name' => $row['name'],
        'brand' => $row['brand'],
        'description' => $row['description'],
        'category' => $row['category'],
        'thumbnail' => $row['thumbnail'],
        'img1' => $row['img1'],
        'img2' => $row['img2'],
        'img3' => $row['img3'],
        'price' => $row['price'],
        'highlight1' => $row['highlight1'],
        'highlight2' => $row['highlight2'],
        'highlight3' => $row['highlight3'],
        'highlight4' => $row['highlight4'],
        'details' => $row['details'],
        'color1' => $row['color1'],
        'color2' => $row['color2'],
        'color3' => $row['color3'],
        'stars' => $row['stars'],
        'review' => $row['review']
    ];
}

echo json_encode($products);

$stmt->close();
$conn->close();
