<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./public/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <title>Amazon || HomePage</title>
</head>

<body>
    <section id="navbar" class="select-none z-[1009] fixed top-0 left-0 right-0 mx-auto shadow-xl bg-gray-900">
        <nav class="flex justify-between items-center text-white">
            <div class="px-5 xl:px-12 py-6 flex w-full items-center max-md:w-full max-md:justify-between">
                <!-- Logo -->
                <div class="text-3xl font-bold font-heading">
                    <a href="./index.php">
                        <img class="h-9 pl-4" src="" alt="logo" />
                    </a>
                </div>

                <!-- Desktop Menu -->
                <ul class="hidden md:flex items-center px-4 mx-auto font-semibold font-heading space-x-12">
                    <li class="cursor-pointer text-lg hover:text-blue-500">
                        <a href="./Shoes.php">
                            <span>Shoes</span>
                        </a>
                    </li>
                    <li class="cursor-pointer text-lg hover:text-blue-500">
                        <a href="./Guitars.php">
                            <span>Guitars</span>
                        </a>
                    </li>
                    <li class="cursor-pointer text-lg hover:text-blue-500">
                        <a href="./wishlist.php">
                            <span>Wishlist</span>
                        </a>
                    </li>
                    <li class="cursor-pointer text-lg hover:text-blue-500">
                        <a href="./about.php">
                            <span>About me</span>
                        </a>
                    </li>
                </ul>

                <!-- Mobile buttons -->
                <div class="flex gap-3 items-center  md:hidden">
                    <button>
                        <a href="cart.php">
                            <i class="fa-solid fa-cart-shopping text-xl"></i>
                        </a>
                    </button>
                    <button onclick="openMenu()">
                        <i class="fa-solid fa-bars text-xl"></i>
                    </button>
                </div>

                <!-- Mobile Search -->
                <div id="searchBar"
                    class="hidden flex-col items-center left-0 p-4 fixed max-md:hidden w-full top-0 justify-center bg-gray-900 text-white">
                    <div class="border p-2 rounded-lg items-center w-9/12">
                        <div class="w-full">
                            <div class="flex justify-between w-full items-center">
                                <div class="flex flex-col w-full">
                                    <div class="flex">
                                        <input id="search" class="focus:outline-0 bg-inherit w-full"
                                            placeholder="Search for a product" type="text"
                                            oninput="searchProduct(this.value)" />
                                        <div class="flex items-center gap-2">
                                            <button onclick="fetchProductDetails($('#search').val())">
                                                <i class=" fa-solid text-xl fa-magnifying-glass"></i>
                                            </button>
                                            <button onclick="toggleSearch()" class="flex">
                                                <i class="fa-solid text-2xl fa-xmark"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="searchResults" class="w-9/12 text-center"></div>
                </div>


                <!-- Needs fixing animation not working yet -->
                <div class="fixed top-0 right-[-100%] w-full h-screen bg-gray-900 text-center transition-transform duration-700 ease-in-out z-50 md:hidden"
                    id="container">
                    <div class="text-6xl absolute top-5 right-5 text-white rotate-45 cursor-pointer"
                        onclick="closeMenu()">+
                    </div>
                    <ul class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 list-none text-center text-white"
                        id="menu">
                        <li class="my-4 transition duration-500 hover:scale-110 hover:bg-gray-800 p-4 text-3xl">
                            <a href="./index.php" onclick="closeMenu()" class="text-white">Home</a>
                        </li>
                        <li class="my-4 transition duration-500 hover:scale-110 hover:bg-gray-800 p-4 text-3xl">
                            <a href="./Shoes.php" onclick="closeMenu()" class="text-white">Shoes</a>
                        </li>
                        <li class="my-4 transition duration-500 hover:scale-110 hover:bg-gray-800 p-4 text-3xl">
                            <a href="./Guitars.php" onclick="closeMenu()" class="text-white">Guitars</a>
                        </li>
                        <li class="my-4 transition duration-500 hover:scale-110 hover:bg-gray-800 p-4 text-3xl">
                            <a href="./wishlist.php" onclick="closeMenu()" class="text-white">Wishlist</a>
                        </li>
                        <li class="my-4 transition duration-500 hover:scale-110 hover:bg-gray-800 p-4 text-3xl">
                            <a href="./cart.php" onclick="closeMenu()" class="text-white">Cart</a>
                        </li>
                    </ul>
                </div>


                <!-- Mobile Menu -->
                <div class="flex gap-3 items-center max-md:hidden">
                    <button onclick="toggleSearch()">
                        <i class="fa-solid fa-magnifying-glass text-xl"></i>
                    </button>
                    <button>
                        <a href="cart.php">
                            <i class="fa-solid fa-cart-shopping text-xl"></i>
                        </a>
                    </button>

                </div>

        </nav>
    </section>


</body>
<script src="./public/js/navbar.js"></script>

</html>