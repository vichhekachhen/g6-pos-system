<?php
require  "models/item.model.php";
require "models/customer.model.php";
require "models/category.model.php";
require_once "models/isPayment.model.php";

$getAllitem = getItems();
$sumQuantityOrder = totalAddToCards();
$items = getCategories();

?>

<head>
  <!-- Banner show for customer -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- Custom styles for this template-->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <script src="../../models/customer.model.php"></script>
  <link href="vendor/custom/css/sb-admin-2.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <!-- Customer page-->
  <link rel="stylesheet" href="vendor/css/customer.css">
  <script src="https://cdn.jsdelivr.net"></script>
  <script src="../../models/customer.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>

</head>

<!-- Nar bar and Slide show  -->

<body>
  <div id="content-wrapper" class="w-100 d-flex flex-column top-0 sticky-top z-10 position-fixed ">

    <!-- navbar -->
    <nav class="navbar navbar-expand topbar static-top shadow bg-primary">
      <div class="sidebar-brand d-flex justify-content-start">
        <div class="sidebar-brand-icon text-white ml-5 pt-3 pb-4">
          <i class="fas fa-shopping-cart fa-lg"></i>
        </div>
        <div class="sidebar-brand-text text-white ml-2 pt-3">Happy Mart<sup>2</sup></div>
      </div>

      <div class="d-flex ml-auto mr-auto">
        <form id="searchForm" class="d-none d-sm-inline-block navbar-search ml-5">
          <div class="input-group">
            <input type="text" class="form-control border-0 small p-2 mt-3" name="search" id="searchInput" placeholder="Search product here..." value="">
            <div class=" input-group-append">
              <button class="btn bg-warning mt-3" type="button">
                <i class="fas fa-search fa-sm"></i>
              </button>
            </div>
        </form>
      </div>
  </div>

  <!-- Select category -->
  <div class="d-none d-sm-inline-block form-inline ml-5">
    <select class="form-control p-2" id="categoryId" name="categoryId" onchange="filterProducts()">
      <option value="all" selected>All Categories</option>

      <?php foreach ($items as $item) { ?>
        <option value="<?= $item['category_name'] ?>"><?= $item['category_name'] ?></option>
      <?php } ?>

    </select>
  </div>

  <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown no-arrow mr-4">
      <div class="sidebar-brand-icon pt-4 d-flex flex-row" id="orders">
        <a href="/checkOut"><i class="fas fa-shopping-cart fa-lg text-white"></i></a>
        <span><?php echo $sumQuantityOrder ?></span>
      </div>
    </li>
    <li class="nav-item no-arrow ">
      <div class="nav-link">
        <i id="heartIcon" class="fa fa-heart text-white" style="font-size:22px;"></i>
      </div>
    </li>
  </ul>
  </nav>
  </div>

  <!-- Banner -->
  <?php require 'views/customers/bannerShow.php'; ?>

  <!-- Card show on customer page -->
  <div class="card-container" style="overflow-y: hidden;">

    <?php foreach ($getAllitem as $item) { ?>
      <div class="card shadow-md" data-category="<?= $item['category_name'] ?>">
        <div class="overflow-hidden d-flex align-items-start p-2">
          <img src="../../assets/items_img/<?= $item['item_image'] ?>" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
          <h5 class="name text-primary" name="name"><b><?= $item['item_name'] ?></b></h5>
          <p class="price mb-2" style="font-size:15px;">Price: <?= "$" . $item['price'] ?></p>

          <form action="../../controllers/customers/customer_process.controller.php" method="post">
            <input type="hidden" name="item_id" value="<?= $item['item_id'] ?>">
            <input type="hidden" name="item_name" value="<?= $item['item_name'] ?>">
            <input type="hidden" name="category" value="<?= $item['category_name'] ?>">
            <input type="hidden" name="price" value="<?= $item['price'] ?>">
            <input type="hidden" name="image" value="<?= $item['item_image'] ?>">
            <button type="submit" class="btn btn-primary" id="btn" name="add"> <i class="fa fa-shopping-cart pr-3"></i>Add to Cart</button>
            <i class="fa fa-heart" style="font-size:21px;" id="heart" aria-hidden="true" onclick="toggleFavorite(event)"></i>
          </form>
        </div>
      </div>
    <?php } ?>

    <?php
    $isPaymentFalse = isPaying();
    if ($isPaymentFalse == "true") { ?>
      <script>
        window.addEventListener("DOMContentLoaded", function() {
          setTimeout(function() {
            Swal.fire({
              title: "Your Payment is Succeesfully.",
              icon: "success",
              confirmButtonText: "OK",
              customClass: {
                title: "my-custom-title-class", // Add your custom CSS class for the title
                content: "my-custom-content-class", // Add your custom CSS class for the content
              },
            });
          }, 0);
        });
        <?php $isdelte =  deleteIsPay() ?>
        </script>

        <?php } ?>
        <?php
        $isPaymentFalse = isPaying();
        if ($isPaymentFalse == "false") {  ?>

            <script >
            window.addEventListener("DOMContentLoaded", function() {
              setTimeout(function() {
                Swal.fire({
                  title: "Please waiting.",
                  icon: "warning",
                  confirmButtonText: "OK",
                  customClass: {
                    title: "my-custom-title-class", // Add your custom CSS class for the title
                    content: "my-custom-content-class", // Add your custom CSS class for the content
                  },
                });
              }, 0);
            });
      </script>

    <?php } ?>

  </div>
</body>

<!-- // JavaScript -->
<script>
  showProductDetails(name, price);
</script>

<!-- ============== script slide show ===================== -->
<script src="../../vendor/customer/customer.js"></script>