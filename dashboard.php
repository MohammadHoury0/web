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

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-4xl bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Upload Product</h2>
        <form action="./insertProd.php" method="post" enctype="multipart/form-data" class="space-y-6">
            <div class="flex flex-wrap -mx-3">
                <div class="w-1/2 px-3 mb-6 md:mb-0">
                    <label for="name" class="block text-gray-700">Product Name</label>
                    <input type="text" name="name" id="name" placeholder="Product Name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="w-1/2 px-3 mb-6 md:mb-0">
                    <label for="brand" class="block text-gray-700">Brand</label>
                    <input type="text" name="brand" id="brand" placeholder="Brand" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label for="description" class="block text-gray-700">Description</label>
                    <input type="text" name="description" id="description" placeholder="Description" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label for="category" class="block text-gray-700">Category</label>
                    <input type="text" name="category" id="category" placeholder="Category" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="w-1/2 px-3 mb-6 md:mb-0">
                    <label for="thumbnail" class="block text-gray-700">Thumbnail</label>
                    <input type="file" name="thumbnail" id="thumbnail" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="w-1/2 px-3 mb-6 md:mb-0">
                    <label for="img1" class="block text-gray-700">Image 1</label>
                    <input type="file" name="img1" id="img1" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="w-1/2 px-3 mb-6 md:mb-0">
                    <label for="img2" class="block text-gray-700">Image 2</label>
                    <input type="file" name="img2" id="img2" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="w-1/2 px-3 mb-6 md:mb-0">
                    <label for="img3" class="block text-gray-700">Image 3</label>
                    <input type="file" name="img3" id="img3" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label for="price" class="block text-gray-700">Price</label>
                    <input type="number" step="0.01" name="price" id="price" placeholder="Price" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="w-1/2 px-3 mb-6 md:mb-0">
                    <label for="highlight1" class="block text-gray-700">Highlight 1</label>
                    <input type="text" name="highlight1" id="highlight1" placeholder="Highlight 1" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="w-1/2 px-3 mb-6 md:mb-0">
                    <label for="highlight2" class="block text-gray-700">Highlight 2</label>
                    <input type="text" name="highlight2" id="highlight2" placeholder="Highlight 2" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="w-1/2 px-3 mb-6 md:mb-0">
                    <label for="highlight3" class="block text-gray-700">Highlight 3</label>
                    <input type="text" name="highlight3" id="highlight3" placeholder="Highlight 3" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="w-1/2 px-3 mb-6 md:mb-0">
                    <label for="highlight4" class="block text-gray-700">Highlight 4</label>
                    <input type="text" name="highlight4" id="highlight4" placeholder="Highlight 4" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label for="details" class="block text-gray-700">Details</label>
                    <textarea name="details" id="details" placeholder="Details" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>
                <div class="w-1/3 px-3 mb-6 md:mb-0">
                    <label for="color1" class="block text-gray-700">Color 1</label>
                    <input type="text" name="color1" id="color1" placeholder="Color 1" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="w-1/3 px-3 mb-6 md:mb-0">
                    <label for="color2" class="block text-gray-700">Color 2</label>
                    <input type="text" name="color2" id="color2" placeholder="Color 2" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="w-1/3 px-3 mb-6 md:mb-0">
                    <label for="color3" class="block text-gray-700">Color 3</label>
                    <input type="text" name="color3" id="color3" placeholder="Color 3" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="w-1/3 px-3 mb-6 md:mb-0">
                    <label for="stars" class="block text-gray-700">Stars</label>
                    <input type="number" name="stars" id="stars" placeholder="Stars" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="w-1/3 px-3 mb-6 md:mb-0">
                    <label for="review" class="block text-gray-700">Color 3</label>
                    <input type="number" name="review" id="review" placeholder="Review" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
            </div>
            <button type="submit" name="submit" class="w-full px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                <i class="fas fa-upload"></i> Upload
            </button>
        </form>
    </div>
</body>

</html>