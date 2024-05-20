<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./public/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <title>Amazon || HomePage</title>
</head>

<body>
    <?php include("./navbar.php"); ?>

    <div id="wishlist" class="w-full h-full mt-32 mb-24 flex justify-center">
        <div id="defWishlist" class="shadow-xl mb-4 bg-white">
            <div class="flex items-center justify-between p-4">
                <div class="flex text-2xl">
                    <h1 class="font-semibold">My Wishlist</h1>
                    <p id="numbOfItems" class="text-gray-600 mx-3"></p>
                </div>
                <button onclick="clearWishlist()" class="bg-gray-800 text-xl text-white px-2 border rounded-lg p-2">
                    Clear all
                </button>
            </div>
            <hr />
            <div id="wishlistContainer" class="py-4 px-6">
                <!-- prod -->

            </div>
        </div>
    </div>
    <?php include("./footer.php"); ?>

    <script src="./public/js/wishlist.js"></script>
</body>

</html>