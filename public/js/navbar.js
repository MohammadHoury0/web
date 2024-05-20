const toggleSearch = () => {
  const searchBar = $("#searchBar")[0];
  searchBar.classList.toggle("!flex");
};

const openMenu = () => {
  const container = $("#container")[0];
  container.style.right = "0";
};

const closeMenu = () => {
  const container = $("#container")[0];
  container.style.right = "-100%";
};

const toggleDropdown = () => {
  const dropdownNavbar = $("#dropdownNavbar")[0];
  dropdownNavbar.classList.toggle("!block");
};

const searchProduct = (input) => {
  if (!input) {
    document.getElementById("searchResults").innerHTML = "";
    return;
  }

  let resp = new XMLHttpRequest();
  resp.open("GET", "searchQuery.php?q=" + encodeURIComponent(input), true);
  resp.onreadystatechange = function () {
    if (resp.readyState === 4 && resp.status === 200) {
      let products = JSON.parse(resp.responseText);
      displaySearchResults(products);
    }
  };
  resp.send();
};

const selectProd = (input) => {
  $("#search")[0].value = input;
  // 3melna clear lal results
  $("#searchResults").empty();
};

const displaySearchResults = (products) => {
  const searchResults = document.getElementById("searchResults");
  searchResults.innerHTML = "";
  products.forEach((product) => {
    $("#searchResults").append(
      `<li class="list-none	 hover:bg-gray-700 cursor-pointer line-none" onclick="selectProd('${product}')">
        <span class="text-white">${product}</span>
      </li>`
    );
  });
};
