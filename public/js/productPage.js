const displayProductDetails = (input) => {
  let resp = new XMLHttpRequest();
  resp.open(
    "GET",
    "displayProductQuery.php?q=" + encodeURIComponent(input),
    true
  );
  resp.onreadystatechange = function () {
    if (resp.readyState === 4 && resp.status === 200) {
      let products = JSON.parse(resp.responseText);
      console.log(products[0]);
      $("#breadcrumbName").text(products[0].name);
      $("#breadcrumbCategory").text(products[0].category);
      $("#category")
        .attr("href", `${products[0].category}.php`)
        .text(products[0].category);
      $("#productName").text(products[0].name);
      $("#productBrand").text(products[0].brand);
      $("#productDescription").text(products[0].description);
      $("#productCategory").text(products[0].category);
      $("#productPrice").text(`$${products[0].price}`);
      $("#productStars").text(products[0].stars);
      $("#productReviews").text(`${products[0].review} reviews`);
      $("#productImg").attr("src", products[0].thumbnail);

      // Add other images if they exist
      $("#productImg1").attr("src", products[0].thumbnail).show();
      $("#productImg2").attr("src", products[0].img1).show();
      $("#productImg3").attr("src", products[0].img2).show();
      $("#productImg4").attr("src", products[0].img3).show();
      // Add other highlights if they exist
      if (products[0].highlight1) {
        $("#productHighlight1").text(products[0].highlight1).show();
      }
      if (products[0].highlight2) {
        $("#productHighlight2").text(products[0].highlight2).show();
      }
      if (products[0].highlight3) {
        $("#productHighlight3").text(products[0].highlight3).show();
      }
      if (products[0].highlight4) {
        $("#productHighlight4").text(products[0].highlight4).show();
      }

      // Add other details if they exist
      if (products[0].details) {
        $("#details").text(products[0].details).show();
      }

      // Add colors if they exist
      if (products[0].color1 != "") {
        console.log("hi");
        $("#productColor1").text(products[0].color1).show();
        $("#productColor1").val(products[0].color1);
      } else {
        console.log("ens");
        $("#colorDiv")[0].remove();
      }
      if (products[0].color2) {
        $("#productColor2").text(products[0].color2).show();
        $("#productColor2").val(products[0].color2);
      }
      if (products[0].color3) {
        $("#productColor3").text(products[0].color3).show();
        $("#productColor3").val(products[0].color3);
      }
    }
  };
  resp.send();
};
const changeImg = (selectedImg) => {
  let mainImg = $("#productImg")[0];
  $(".border-blue-500")
    .removeClass("border-blue-500")
    .addClass("border-gray-300");
  $(selectedImg).removeClass("border-gray-300").addClass("border-blue-500");
  mainImg.src = selectedImg.src;
};

const addToCart = (name, quantity, color, brand, detail, price, img) => {
  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  let itemExists = cart.some((item) => item.name === name);
  if (itemExists) {
    alert("items exist");
  } else {
    cart.push({ name, quantity, color, brand, detail, price, img });
    localStorage.setItem("cart", JSON.stringify(cart));
    alert("items added");
  }
};

window.onload = function () {
  let url = new URLSearchParams(window.location.search);
  let productName = JSON.parse(decodeURIComponent(url.get("product")));
  displayProductDetails(productName);
};
