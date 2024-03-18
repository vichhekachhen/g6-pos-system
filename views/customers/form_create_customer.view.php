<?php
require  "models/item.model.php";
require "models/customer.model.php";
require "models/category.model.php";
$getAllitem = getItems();
$sumQuantityOrder = totalAddToCards();
$items = getCategories();

?>

<head>
  <!-- Banner show for customer tailwindcss  -->
  <script src="https://cdn.tailwindcss.com"></script>
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

</head>
<!-- Nar bar and Slide show  -->

<body>
  <div id="content-wrapper" class="d-flex flex-column top-0 sticky-top">
    <!-- navbar -->
    <nav class="navbar navbar-expand topbar static-top shadow bg-primary">
      <div class="sidebar-brand d-flex justify-content-start">
        <div class="sidebar-brand-icon text-white ml-5 pt-3 pb-4">
          <i class="fas fa-shopping-cart fa-lg"></i>
        </div>
        <div class="sidebar-brand-text text-white ml-2 pt-3">POS SYSTEM<sup>2</sup></div>
      </div>

      <div class="d-flex ml-auto mr-auto">
        <form id="searchForm" class="d-none d-sm-inline-block navbar-search ml-5">
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

  <!-- select category  -->
  <div class="d-none d-sm-inline-block form-inline ml-5">
    <select class="form-control p-2" id="categoryId" name="categoryId" onchange="filterTable()">
      <option selected>All Categories</option>
      <?php
      foreach ($items as $item) { ?>
        <option value="<?= $item['category_id'] ?>"><?= $item['category_name'] ?></option>
      <?php } ?>
    </select>
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
        <i class="fa fa-heart text-white" style="font-size:22px;"></i>
      </a>
    </li>
  </ul>
  </nav>
  </div>
  <!-- Banner  -->
  <?php require 'views/customers/bannerShow.php'  ?>

  <!-- card show on customer page   -->
  <div class="card-container">
    <?php foreach ($getAllitem as $item) : ?>
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
            <i class="fa fa-heart" style="font-size:20px;" id="heart" aria-hidden="true" onclick="toggleFavorite(event)"></i>
          </form>

        </div>
      </div>
    <?php endforeach; ?>
  </div>
</body>

<script>
  showProductDetails(name, price);
</script>

<!-- ============== script slide show ===================== -->
<script src="../../vendor/customer/customer.js"></script>