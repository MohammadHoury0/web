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
  <!-- Navbar -->
  <?php
  include("./navbar.php")
  ?>

  <!-- swiper -->
  <?php include("./swiper.php")
  ?>




  <!-- List of some products -->
  <div class="font-[sans-serif] bg-gray-100">
    <div class="p-2">
      <h1 class="text-3xl text-center p-4 antialiased font-semibold font-mono">
        Latest Product
      </h1>

      <!-- gotta Add styling -->
      <hr />
    </div>
    <div class="p-4 mx-auto lg:max-w-7xl sm:max-w-full">
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 max-xl:gap-4 gap-6">
        <!-- Items/Products -->
        <div class="bg-white rounded-2xl p-5 cursor-pointer hover:-translate-y-2 transition-all relative shadow-md p-4 hover:shadow-lg transition-shadow cursor-pointer hover:-translate-y-1 transition-transform">
          <div class="bg-gray-100 w-10 h-10 flex items-center justify-center rounded-full cursor-pointer absolute top-4 right-4">
            <button onclick="addToWishlist()">
              <i class="fa-regular fa-heart"></i>
            </button>
          </div>
          <div class="bg-white rounded-xl ">
            <div class="w-full h-52 overflow-hidden rounded-lg mb-4">
              <img src="https://readymadeui.com/images/product10.webp" alt="Urban Sneakers" class="h-full w-full object-contain transition-transform duration-300 hover:scale-110">
            </div>
            <div>
              <h3 class="text-lg font-semibold text-gray-800">Urban Sneakers</h3>
              <p class="text-gray-500 text-sm">Nike</p>
              <p class="text-gray-600 text-sm mt-1">Lorem ipsum dolor sit amet, consectetur adipiscing
                elit.</p>
              <div class="flex justify-between items-center mt-2">
                <div class="flex items-center">
                  <svg fill="currentColor" viewBox="0 0 20 20" class="w-4 h-4 text-yellow-500">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.37 1.24.588 1.812l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118l-2.8-2.034c-.783-.572-.381-1.812.588-1.812h3.462a1 1 0 00.95-.69l1.07-3.292z">
                    </path>
                  </svg>
                  <span class="text-yellow-500 ml-1">4.2</span>
                  <span class="text-gray-500 ml-1">(120 ratings)</span>
                </div>
                <h4 class="text-lg font-bold text-gray-800">$12</h4>
              </div>
              <button class="mt-4 w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition-colors">Add
                to Cart</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a href="./products.php">
      <span>View all products</span></a>
  </div>
  <!-- Needs modification for text and stuff -->
  <!-- Footer -->
  <?php include 'footer.php'; ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
  <script src="./public/js/index.js"></script>
</body>

</html>