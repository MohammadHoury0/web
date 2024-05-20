<?php

$conn = new mysqli("localhost", "root", "", "web");

if (!$conn) {
    echo "hello", mysqli_connect_error();
}
// SQL query to insert data
$sql = "INSERT INTO products (id, name, brand, description,category,thumbnail,img1,img2,img3,price,	highlight1,highlight2,highlight3,highlight4,details,color1,color2,color3	) VALUES (?, ?, ?, ?)";

$stmt->execute();

// Close connection
$stmt->close();
$conn->close();
