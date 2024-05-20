<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./public/css/styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="../public/js/productPage.js"></script>
    <title>Amazon || HomePage</title>
</head>

<body>
    <?php
    @include('./navbar.php') ?>
    <section class="pt-28 pb-8 bg-white">
        <div class="p-12 rounded-lg shadow-xl max-w-screen-xl mx-auto">
            <ol role="list" class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                <li>
                    <div class="flex items-center">
                        <i class="fa-solid fa-house mr-1"></i>
                        <a href="index.php" class="mr-2 text-lg font-medium text-gray-900">Home</a>
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <a id="category" href="#" class="mr-2 text-lg font-medium text-gray-900"
                            id=" breadcrumbCategory"></a>
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </li>

                <li class="text-lg">
                    <span id="breadcrumbName" class="font-medium text-gray-400 hover:text-gray-700"></span>
                </li>
            </ol>
            <div class="lg:grid lg:grid-cols-2 lg:gap-16 mt-4">
                <!-- Main image and thumbnails -->
                <div class="flex flex-col justify-center items-center max-w-md lg:max-w-lg mx-auto">
                    <div class="relative mb-4">
                        <img id="productImg" class="w-full w-[500px] h-[500px] object-contain rounded-lg" src=""
                            alt="Main Product Image" />
                    </div>

                    <div class="grid grid-cols-4 gap-6">
                        <img id="productImg1" onclick="changeImg(this)"
                            class="w-[150px] h-[150px] object-contain cursor-pointer rounded-lg border-2 border-blue-500"
                            src="" alt="Thumbnail 1" />
                        <img id="productImg2" onclick="changeImg(this)"
                            class="w-[150px] h-[150px] object-contain cursor-pointer rounded-lg border-2 border-gray-300"
                            src="" alt="Thumbnail 2" />
                        <img id="productImg3" onclick="changeImg(this)"
                            class="w-[150px] h-[150px] object-contain cursor-pointer rounded-lg border-2 border-gray-300"
                            src="" alt="Thumbnail 3" />
                        <img id="productImg4" onclick="changeImg(this)"
                            class="w-[150px] h-[150px] object-contain cursor-pointer rounded-lg border-2 border-gray-300"
                            src="" alt="Thumbnail 4" />
                    </div>
                </div>

                <!-- Product details -->
                <div class="mt-6 sm:mt-8 lg:mt-0">
                    <div class="flex flex-col">
                        <!-- Product name -->
                        <h1 id="productName" class="text-xl font-semibold sm:text-2xl"></h1>
                        <!-- Brand -->
                        <span id="productBrand" class="text-lg text-gray-600 mb-2"></span>
                        <!-- Description -->
                        <p id="productDescription" class="mb-6 text-gray-500"></p>
                        <p id="details" class="hidden mb-6 text-gray-500"></p>

                    </div>

                    <!-- Product highlights -->
                    <details class="p-4 rounded-lg border mb-6 cursor-pointer">
                        <summary class="cursor-pointer text-lg font-medium text-gray-700">
                            Product Highlights:
                        </summary>
                        <ul class="list-disc list-inside text-gray-500 mt-2">
                            <li id="productHighlight1"></li>
                            <li id="productHighlight2"></li>
                            <li id="productHighlight3"></li>
                            <li id="productHighlight4"></li>
                        </ul>
                    </details>

                    <!-- Color and quantity -->
                    <div class="flex space-x-8 mb-6">
                        <div class="flex flex-col w-full">
                            <label for="quantity" class="mb-2 text-gray-700">Quantity:</label>
                            <input type="number" id="quantity" class="border rounded-lg p-2 w-full" min="1" value="1" />
                        </div>

                        <!-- if color empty remove this -->

                        <div id="colorDiv" class="flex flex-col w-full">
                            <label for="color" class="mb-2 text-gray-700">Color:</label>
                            <select id="color" class="border rounded-lg p-2">
                                <option id="productColor1" value=""></option>
                                <option id="productColor2" value=""></option>
                                <option id="productColor3" value=""></option>
                            </select>
                        </div>
                    </div>

                    <!-- Price -->
                    <div class="flex items-center space-x-4 mb-6">
                        <div class="rounded-lg bg-gray-100 flex py-2 px-3">
                            <span class="text-gray-400 mr-1 mt-1">$</span>
                            <span id="productPrice" class="font-bold text-gray-800 text-3xl"></span>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="flex items-center gap-2">
                        <button onclick="addToCart(
        $('#productName').text(), 
        $('#quantity').val(), 
        $('#color').val(), 
        $('#productBrand').text(), 
        $('#details').text(), 
        $('#productPrice').text(), 
        $('#productImg').attr('src')
    )" class="flex items-center justify-center w-full p-4 text-sm font-medium bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 transition duration-200 ease-in-out">
                            <i class="fa-solid fa-cart-shopping mr-2"></i>
                            Add to cart
                        </button>

                        <button onclick="addToWishlist(
        $('#productName').text(), 
        $('#productBrand').text(), 
        $('#productDescription').text(), 
        $('#productPrice').text(), 
        $('#productImg').attr('src')
    )" class="flex items-center justify-center p-4 text-sm font-medium bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 transition duration-200 ease-in-out">
                            <i class="fa-regular fa-heart"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    @include('./footer.php') ?>
</body>

</html>