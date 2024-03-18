  //Banner show
  let slideIndex = 0;
  showSlides();

  function showSlides() {
    let i;
    let slides = document.getElementsByClassName("bannerShow");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    
    slideIndex++;
    if (slideIndex > slides.length) {
      slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
  }

//added to favorites
function toggleFavorite(event) {
  let heartIcon = event.target;
  heartIcon.classList.toggle("selected");

  let isFavorite = heartIcon.classList.contains("selected");
  let card = heartIcon.closest(".card");

  if (isFavorite) {
    // Add the card to the list of favorite items
    let favoriteItems = JSON.parse(localStorage.getItem("favoriteItems")) || [];
    favoriteItems.push(card.dataset.itemId);
    localStorage.setItem("favoriteItems", JSON.stringify(favoriteItems));
    console.log("Added to favorites");
  } else {
    // Remove the card from the list of favorite items
    let favoriteItems = JSON.parse(localStorage.getItem("favoriteItems")) || [];
    let index = favoriteItems.indexOf(card.dataset.itemId);
    if (index > -1) {
      favoriteItems.splice(index, 1);
      localStorage.setItem("favoriteItems", JSON.stringify(favoriteItems));
    }
    console.log("Removed from favorites");
  }
}


//search product in customer page 
  function searchProduct() {
    // Get the search input value
    let searchInput = document.getElementById("searchInput").value.toLowerCase();

    // Get all the cards
    let cards = document.getElementsByClassName("card");

    // Loop through each card and check if the item name contains the search input
    for (let i = 0; i < cards.length; i++) {
      let itemName = cards[i].getElementsByClassName("name")[0].innerText.toLowerCase();

      // Show or hide the card based on the search input match
      if (itemName.includes(searchInput)) {
        cards[i].style.display = "block";
      } else {
        cards[i].style.display = "none";
      }
    }
  }

  // Add event listener to the search input
  document.getElementById("searchInput").addEventListener("input", searchProduct);


  
  // filter category in cart
  function filterProducts() {
    let selectedCategoryId = document.getElementById("categoryId").value;
    let cards = document.querySelectorAll(".card");

    // Loop through each card and check if the category matches the selected category
    for (let i = 0; i < cards.length; i++) {
      let cardCategory = cards[i].getAttribute("data-category");

      // Show or hide the card based on the selected category
      if (selectedCategoryId === "all" || selectedCategoryId === cardCategory) {
        cards[i].style.display = "block";
      } else {
        cards[i].style.display = "none";
      }
    }

  }
  filterProducts();