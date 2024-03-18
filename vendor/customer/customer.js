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
  var heartIcon = event.target;
  heartIcon.classList.toggle("selected");

  var isFavorite = heartIcon.classList.contains("selected");
  // Store or handle the favorite state as needed
  if (isFavorite) {
    // Code to handle when the heart is selected (added to favorites)
    console.log("Added to favorites");
  } else {
    // Code to handle when the heart is deselected (removed from favorites)
    console.log("Removed from favorites");
  }
}


//search product in customer page 
  function searchProduct() {
    // Get the search input value
    var searchInput = document.getElementById("searchInput").value.toLowerCase();

    // Get all the cards
    var cards = document.getElementsByClassName("card");

    // Loop through each card and check if the item name contains the search input
    for (var i = 0; i < cards.length; i++) {
      var itemName = cards[i].getElementsByClassName("name")[0].innerText.toLowerCase();

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
