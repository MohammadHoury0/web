const addToWishlist = (name, brand, detail, price, img) => {
  let wishlist = JSON.parse(localStorage.getItem("wishlist")) || [];
  let itemExists = wishlist.some((item) => item.name === name);
  if (itemExists) {
    appendNotif(false, "Wishlist", "Already in ");
  } else {
    wishlist.push({ name, brand, detail, price, img });
    localStorage.setItem("wishlist", JSON.stringify(wishlist));
    appendNotif(true, "Wishlist", "Added to ");
  }
};
let total = 0;

const calculateTotalPrice = () => {
  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  cart.forEach((element) => {
    total += parseFloat(element.price);
  });
};

const clearCart = () => {
  localStorage.removeItem("cart");
};

const removeCartItem = (name) => {
  let cart = JSON.parse(localStorage.getItem("cart"));
  cart = cart.filter((item) => item.name !== name);
  localStorage.setItem("cart", JSON.stringify(cart));
  // appendNotif(true, "Cart", "Removed from ");
};

const closeNotif = (event) => {
  event.parentElement.parentElement.remove();
};

window.onload = function () {
  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  calculateTotalPrice();
  $("#totalPrice").text(total + "$");
  if (cart.length != 0) {
    cart.forEach((element) => {
      element.price *= element.quantity;
      $("#cartContainer")
        .append(`<div class="rounded-3xl border-2 border-gray-200 p-4 lg:p-8 grid grid-cols-12 mb-8 max-lg:max-w-lg max-lg:mx-auto gap-y-4">
    <div class="col-span-12 lg:col-span-2 img box">
        <img src="${element.img}" alt="${element.name}" class="max-lg:w-full lg:w-[250px]">
    </div>
    <div class="col-span-12 lg:col-span-10 detail w-full lg:pl-3">
        <div class="flex items-center justify-between w-full mb-2">
            <div class="flex flex-col">
                <h5 class="font-manrope font-bold text-2xl leading-9 text-gray-900">${element.name}</h5>
                <span>${element.brand}</span>
            </div>
            <button onclick="removeCartItem('${element.name}')" class="rounded-full group flex items-center justify-center focus-within:outline-red-500">
                <i class="fa-solid fa-trash-can"></i>
            </button>
        </div>
        <p class="font-normal text-base leading-7 text-gray-500 mb-2">
            ${element.detail}
        </p>
        <div class="flex justify-between items-center">
            <div id="color" class="flex flex-col">
               
                <p>Quantity:<span id="qty">${element.quantity}</span></p>
            </div>
            <h6 id="price" class="text-indigo-600 font-manrope font-bold text-2xl leading-9 text-right">${element.price}$
            </h6>
        </div>
    </div>
</div>`);
      if (element.color != undefined) {
        $("#color").append(
          ` <p>Color:<span id="color">${element.color}</span></p>`
        );
      }
    });
    src = "./";
  } else {
    $("#filledCart").addClass("hidden");
    $("#cart")
      .append(`<div class="w-full h-full flex flex-col items-center p-8 select-none max-sm:mt-5">
    <img src="../public/images/empty.png" class="w-[800px]" />
    <div class="flex flex-col items-center gap-7">
      <div class="flex flex-col items-center font-mono">
        <p class="text-2xl antialiased font-bold mb-4">
          You have no items in your shopping cart.
        </p>
        <p class="text-xl antialiased">Let's go buy something!</p>
      </div>
      <a href="../Guitars.php">
        <button class="rounded-lg border p-2 px-4 bg-gray-800 text-white hover:bg-gray-700">
          Shop Now
        </button>
      </a>
    </div>
  </div>;`);
  }
};
