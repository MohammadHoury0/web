const addToWishlist = (name, brand, detail, price, img) => {
  let wishlist = JSON.parse(localStorage.getItem("wishlist")) || [];
  let itemExists = wishlist.some((item) => item.name === name);
  if (itemExists) {
    alert("items exist");
    // appendNotif(false, "Wishlist", "Already in ");
  } else {
    wishlist.push({ name, brand, detail, price, img });
    localStorage.setItem("wishlist", JSON.stringify(wishlist));
    // appendNotif(true, "Wishlist", "Added to ");
    alert("items added");
  }
};

const appendNotif = (success, name, status) => {
  let container = $("body")[0];
  let alertType = success ? "green" : "red";
  let icon = success ? "check" : "triangle-exclamation";
  let alertText = success ? "Success" : "Error";

  let notifHtml = `
  <div class="alert-container fixed z-[100] top-4 right-4 max-w-md w-full sm:w-auto m-4">
    <div class="bg-${alertType}-50 border border-${alertType}-400 rounded-xl text-${alertType}-800 text-sm p-4 relative">
        <div class="flex items-center justify-between">
          <div class="flex items-center space-x-2">
            <div class="flex items-center justify-center h-6 w-6 bg-${alertType}-500 rounded-full p-1">
              <i class="fa-solid fa-${icon} text-white"></i>
            </div>
            <p class="text-xl">
              <span class="font-bold">${alertText}:</span> Product ${status} ${name}!
            </p>
          </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full h-2 bg-${alertType}-300 rounded-b-xl overflow-hidden">
          <div class="h-full bg-${alertType}-500 progress-bar"></div>
        </div>
      </div>
    </div>`;

  container.insertAdjacentHTML("beforeend", notifHtml);

  let progressBar = container.querySelector(".alert-container .progress-bar");
  progressBar.style.width = "0";
  progressBar.style.animation = "none";
  setTimeout(() => {
    progressBar.style.animation = "progress-bar 5s linear";
  }, 10);

  setTimeout(() => {
    let alertContainer = container.querySelector(".alert-container");
    alertContainer.remove();
  }, 5000);
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

// const closeNotif = (event) => {
//   event.parentElement.parentElement.remove();
// };
