<?php
require  "models/item.model.php";
require "models/customer.model.php";
$getAllitem = getItems();
$sumQuantityOrder = totalAddToCards();

?>
<!-- stye css  -->
<style>
  #orders span {
    background: red;
    border-radius: 70%;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    position: absolute;
    top: -0px;
    left: 75%;
    width: 25px;
    height: 25px;
    /* padding: 3px 10px; */
}



  .number {
    position: absolute;
    right: 69%;
    top: 48%;
    font-size: 19px;
    color: gold;
    font-weight: bold;
  }

  main {
    display: flex;
    flex-direction: row;
  }

  #btn {
    background: blue;
    margin-bottom: 5px;
  }

  .aside-right {
    padding: 20px;
    flex: 1;
    overflow-y: auto;
  }

  .card-container {
    flex: 1;
    overflow-y: auto;
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    padding: 20px;
    background: LightGray;
  }

  .card {
    width: 249px;
    height: 280px;
    display: flex;
    flex-direction: column;
  }

  .card-body {
    flex: 1;
    display: flex;
    flex-direction: column;
  }

  /* Additional style for product details table */
  #productDetails {
    display: none;
  }

  /* banner style */
  /* Fading animation */
  .fade {
    animation-name: fade;
    animation-duration: 2s;
  }

  @keyframes fade {
    from {
      opacity: .4
    }

    to {
      opacity: 1
    }
  }

  /* On smaller screens, decrease text size */
  @media only screen and (max-width: 300px) {
    .text {
      font-size: 11px
    }
  }
</style>
<!-- link css and js -->

<head>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <script src="../../models/customer.model.php"></script>
  <!-- Custom styles for this template-->
  <link href="vendor/custom/css/sb-admin-2.min.css" rel="stylesheet">
  <!-- Banner show for customer interface  -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <!-- Customer page-->
  <script src="https://cdn.jsdelivr.net"></script>
  <script src="../../models/customer.js"></script>
</head>
<!-- Nar bar and Slide show  -->

<body>
  <div id="content-wrapper" class="d-flex flex-column top-0 sticky-top">
    <!-- navbar -->
    <nav class="navbar navbar-expand topbar static-top shadow  bg-primary">
      <a class="sidebar-brand d-flex justify-content-start" href="/admin">
        <div class="sidebar-brand-icon text-white ml-5 pt-3 pb-4">
          <i class="fas fa-shopping-cart fa-lg"></i>
        </div>
        <div class="sidebar-brand-text text-white ml-2 pt-3">POS SYSTEM<sup>2</sup></div>
      </a>

      <div class="d-flex ml-auto mr-auto">
        <form id="searchForm" class="d-none d-sm-inline-block navbar-search">
          <div class="input-group">
            <input type="text" class="form-control border-0 small py-2.5 mt-3" name="search" id="searchInput" placeholder="Search product here..." value=""">
          <div class=" input-group-append">
            <button class="btn bg-warning mt-3" type="button">
              <i class="fas fa-search fa-sm"></i>
            </button>
          </div>
        </form>
      </div>
  </div>

  <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown no-arrow mr-9">
      <div class="sidebar-brand-icon text-white pt-4 d-flex flex-row" id="orders">
        <a href="/checkOut"><i class="fas fa-shopping-cart fa-lg"></i></a>
        <span><?php echo $sumQuantityOrder ?></span>
      </div>
    </li>
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="/">
        <h3 class="mr-2 d-none d-lg-inline text-white small">Lunar</h3>
        <img class="img-profile rounded-circle" src="assets/banners/show.jpg">
      </a>
    </li>
  </ul>
  </nav>
  </div>
  <!-- slide show -->

  <div class="carousel-inner relative w-full overflow-hidden h-[400px]">
    <div class="carousel-item active relative float-left w-full ">
      <div class="slideshow-container">

        <?php
        $banners =
          [
            'burger.jpg',
            'coffee.jpg',
            'panda.jpg',
            'kaa.jpg',
            'pizza.jpg',
          ];
        foreach ($banners as $banner) {
        ?>
          <div class="mySlides fade">
            <img src="../../assets/items_img/photo_2024-03-15_19-51-50.jpg" class="absolute bg-center left-0 w-full z-1">
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </div>

  <!-- card show on customer page   -->
  <div class="card-container">
    <?php foreach ($getAllitem as $item) { ?>
      <div class="card shadow-md">
        <div class="overflow-hidden d-flex align-items-start p-2">
          <img src="../../assets/items_img/<?= $item["item_image"] ?>" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
          <h5 class="name" name="name">Item: <?= $item["item_name"] ?></h5>
          <p class="price">Price: <?= "$" . $item["price"] ?></p>

          <form action="../../controllers/customers/customer_process.controller.php" method="post">
            <input type="hidden" name="item_id" value="<?= $item["item_id"] ?>">
            <input type="hidden" name="item_name" value="<?= $item["item_name"] ?>">
            <input type="hidden" name="category" value="<?= $item["category_name"] ?>">
            <input type="hidden" name="price" value="<?= $item["price"] ?>">
            <input type="hidden" name="image" value="<?= $item["item_image"] ?>">
            <button type="submit" class="btn btn-primary" id="btn" name="add">Add to Cart</button>
          </form>

        </div>
      </div>
    <?php } ?>
    <div class="list">
    </div>
  </div>
</body>

<script>
  showProductDetails(name, price);
</script>

<!-- ============== script slide show ===================== -->

<script>
  let slideIndex = 0;
  showSlides();

  function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
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
</script>