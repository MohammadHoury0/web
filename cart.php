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

<body>
    <?php include("./navbar.php") ?>
    <section id="cart" class="py-24 relative">
        <div id="filledCart" class="w-full max-w-7xl px-4 md:px-5 lg-6 mx-auto">

            <h2 class="title font-manrope font-bold text-4xl leading-10 mb-8 text-center text-black">Shopping Cart
            </h2>
            <!-- product put the for each php here -->
            <div id="cartContainer" class="flex flex-col">

            </div>
            <div class="flex flex-col md:flex-row items-center md:items-center justify-between lg:px-6 pb-6 border-b border-gray-200 max-lg:max-w-lg max-lg:mx-auto">
                <h5 class="text-gray-900 font-manrope font-semibold text-2xl leading-9 w-full max-md:text-center max-md:mb-4">
                    Subtotal</h5>

                <div class="flex items-center justify-between gap-5 ">

                    <h6 id="totalPrice" class="font-manrope font-bold text-3xl lead-10 text-indigo-600">$440</h6>
                </div>
            </div>
            <div class="max-lg:max-w-lg max-lg:mx-auto">
                <p class="font-normal text-base leading-7 text-gray-500 text-center mb-5 mt-6">Shipping taxes, and
                    discounts
                    calculated
                    at checkout</p>
                <button class="rounded-full py-4 px-6 bg-indigo-600 text-white font-semibold text-lg w-full text-center transition-all duration-500 hover:bg-indigo-700 ">Checkout</button>

            </div>
        </div>

    </section>
    <?php include("./footer.php") ?>

</body>
<script src="./public/js/cart.js"></script>

</html>