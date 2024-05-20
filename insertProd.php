<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conn = new mysqli("localhost", "root", "", "web");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve form data
    $name = $_POST['name'];
    $brand = $_POST['brand'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $highlight1 = $_POST['highlight1'];
    $highlight2 = $_POST['highlight2'];
    $highlight3 = $_POST['highlight3'];
    $highlight4 = $_POST['highlight4'];
    $details = $_POST['details'];
    $color1 = $_POST['color1'];
    $color2 = $_POST['color2'];
    $color3 = $_POST['color3'];
    $stars = $_POST['stars'];
    $review = $_POST['review'];


    // hon 3am men na2e el file w we r getting it by name w first mtl array hol el [] hene for u to know wen 3am y7toun bel db
    $thumbnail = file_get_contents($_FILES['thumbnail']['tmp_name']);
    $img1 = file_get_contents($_FILES['img1']['tmp_name']);
    $img2 = file_get_contents($_FILES['img2']['tmp_name']);
    $img3 = file_get_contents($_FILES['img3']['tmp_name']);

    // SQL query to insert data
    $sql = "INSERT INTO products (name, brand, description, category, thumbnail, img1, img2, img3, price, highlight1, highlight2, highlight3, highlight4, details, color1, color2, color3,stars,review) VALUES (?,?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare and bind
    echo ($stmt);
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssbbbbdssssssssdi", $name, $brand, $description, $category, $thumbnail, $img1, $img2, $img3, $price, $highlight1, $highlight2, $highlight3, $highlight4, $details, $color1, $color2, $color3, $stars, $review);

    // Send binary data
    $stmt->send_long_data(4, $thumbnail);
    $stmt->send_long_data(5, $img1);
    $stmt->send_long_data(6, $img2);
    $stmt->send_long_data(7, $img3);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
