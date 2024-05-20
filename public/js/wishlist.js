const removeWishlistItem = (name) => {
  let wishlist = JSON.parse(localStorage.getItem("wishlist"));
  wishlist = wishlist.filter((item) => item.name !== name);
  localStorage.setItem("wishlist", JSON.stringify(wishlist));
  appendNotif(true, "Wishlist", "Removed from ");
};

const clearWishlist = () => {
  localStorage.removeItem("wishlist");
};

const closeNotif = (event) => {
  event.parentElement.parentElement.remove();
};

const fetchProductDetails = (input) => {
  let resp = new XMLHttpRequest();
  resp.open("GET", "fetchProduct.php?q=" + encodeURIComponent(input), true);
  resp.onreadystatechange = function () {
    if (resp.readyState === 4 && resp.status === 200) {
      let products = JSON.parse(resp.responseText);
      let encodedProduct = encodeURIComponent(JSON.stringify(products[0]));
      window.location.href = `productPage.php?product=${encodedProduct}`;
    }
  };
  resp.send();
};

window.onload = function () {
  let wishlist = JSON.parse(localStorage.getItem("wishlist")) || [];
  if (wishlist.length != 0) {
    $("#numbOfItems").text("(" + wishlist.length + " item)");
    wishlist.forEach((element) => {
      console.log(element);
      $("#wishlistContainer").append(`
      <div class="flex py-8 items-center px-2 gap-4 min-w-[550px]">
        <img src="${element.img}" alt="${element.name}" class="w-32 h-32 object-cover rounded-lg" />
        <div class="flex flex-col w-full">
          <div class="flex justify-between items-center">
            <div class="flex flex-col">
              <h1 class="font-bold text-xl">${element.name}</h1>
              <span class="text-gray-500">${element.brand}</span>
              <p class="text-gray-600 mt-1 max-w-xl		">${element.detail}</p>
            </div>
            <button class="text-red-600 hover:text-red-800 focus:outline-none" onclick="removeWishlistItem('${element.name}')">
              <i class="fa-solid fa-trash text-xl"></i>
            </button>
          </div>
          <div class="flex justify-between items-center mt-2">
            <div>
              <p class="font-bold text-lg">${element.price}$</p>
            </div>
            <button onclick="addToCart('${element.name}', '${element.price}')" class="bg-gray-800 text-white px-6 py-2 rounded-lg hover:bg-gray-700 focus:outline-none">
              Add To Cart
            </button>
          </div>
        </div>
      </div>
    `);
    });
  } else {
    $("#defWishlist").addClass("hidden");
    $("#wishlist")
      .append(`<div class="flex flex-col items-center p-8 select-none">
  <img src="../public/images/wishlist_empty.png" alt="empty-wishlist" class="w-[600px] pb-4" />
  <div class="flex flex-col gap-5 items-center font-mono">
  <h1 class="text-4xl antialiased font-bold text-center">Your wishlist is empty</h1>
  <span class="">Explore more and shortlist some items</span>
  <a href="./Guitars.php">
    <button class="border p-2 rounded-lg bg-gray-800 text-white hover:bg-gray-700">
      Start Shopping
    </button>
  </a>
  </div>
  </div>`);
  }
};
