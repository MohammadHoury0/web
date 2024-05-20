<?php
$conn = new mysqli("localhost", "root", "", "web");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch all products
$sql = "SELECT id, name, brand, description, category, thumbnail, img1, img2, img3, price, highlight1, highlight2, highlight3, highlight4, details, color1, color2, color3,stars,review FROM products";
$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    $products = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $products = [];
}

$conn->close();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./public/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <title>Amazon || HomePage</title>
</head>

<body id="bds">
    <?php include("./navbar.php") ?>
    <div class="my-4" id="All">
        <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex items-baseline justify-between border-b border-gray-200 pb-6 pt-24">
                <h1 class="text-4xl font-bold tracking-tight text-gray-900">All Products</h1>
            </div>


            <!-- Products section -->
            <div class="lg:col-span-3">
                <!-- Products -->
                <div id="product-grid" class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                    <?php if (count($products) > 0) : ?>
                        <?php foreach ($products as $product) :  ?>
                            <?php if ($product['category'] == "Shoes") : ?>
                                <div class="bg-white rounded-2xl p-5 cursor-pointer hover:-translate-y-2 transition-all relative shadow-md p-4 hover:shadow-lg transition-shadow cursor-pointer hover:-translate-y-1 transition-transform">
                                    <div class="bg-gray-100 w-10 h-10 flex items-center justify-center rounded-full cursor-pointer absolute top-4 right-4">
                                        <button onclick="addToWishlist(
                                '<?= htmlspecialchars($product['brand']) ?>', 
                                '<?= htmlspecialchars($product['details']) ?>', 
                                '<?= htmlspecialchars($product['price']) ?>', 
                                '<?= htmlspecialchars($product['thumbnail']) ?>'
                            )">
                                            <i class="fa-regular fa-heart"></i>
                                        </button>
                                    </div>
                                    <div class="bg-white rounded-xl flex flex-col h-full justify-between">
                                        <div class="w-full h-52 overflow-hidden rounded-lg mb-4">
                                            <img src="<?= htmlspecialchars($product['thumbnail']) ?>" class="h-full w-full object-contain transition-transform duration-300 hover:scale-110">
                                        </div>

                                        <div>
                                            <h3 class="text-lg font-semibold text-gray-800">
                                                <?= htmlspecialchars($product['name']) ?>
                                            </h3>
                                            <p class="text-gray-500 text-sm"> <?= htmlspecialchars($product['brand']) ?></p>
                                            <p class="text-gray-600 text-sm mt-1">
                                                <?= htmlspecialchars($product['details']) ?>
                                            </p>
                                            <div class="flex justify-between items-center mt-2">
                                                <div class="flex items-center">
                                                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-4 h-4 text-yellow-500">
                                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.37 1.24.588 1.812l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.572-.381-1.812.588-1.812h3.462a1 1 0 00.95-.69l1.07-3.292z">
                                                        </path>
                                                    </svg>
                                                    <span class="text-yellow-500 ml-1">
                                                        <?= htmlspecialchars(number_format($product['stars'], 1)) ?>
                                                    </span>
                                                    <span class="text-gray-500 ml-1">(<?= htmlspecialchars($product['review']) ?>
                                                        ratings)</span>
                                                </div>
                                                <h4 class="text-lg font-bold text-gray-800">
                                                    <?= htmlspecialchars(number_format($product['price'], 2)) ?>$
                                                </h4>
                                            </div>
                                            <div class="mt-4">
                                                <button onclick="fetchProductDetails('<?= htmlspecialchars($product['name']) ?>')" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition-colors">Add
                                                    to Cart</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <p class="text-gray-700">No products found.</p>
                    <?php endif; ?>
                </div>

            </div>
        </main>
    </div>
    <?php include("./footer.php") ?>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
<script src="./public/js/index.js"></script>

</html>