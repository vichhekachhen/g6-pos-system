<?php
require  "models/item.model.php";
require "models/customer.model.php";
$getAllitem = getAllItems();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="css/main.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" rel="stylesheet">






  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>




  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="vendor/custom/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="vendor/custom/js/demo/chart-area-demo.js"></script>
  <script src="vendor/custom/js/demo/chart-pie-demo.js"></script>


  <!DOCTYPE html>
  <html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>POS SYSTEM</title>
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="vendor/custom/css/sb-admin-2.min.css" rel="stylesheet">
  </head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">


    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-shopping-cart"></i>
        </div>
        <div class="sidebar-brand-text mx-3">POS SYSTEM<sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="/admin">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Items</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Product Contains:</h6>
            <a class="collapse-item" href="/categories">Categories</a>
            <a class="collapse-item" href="/items">Products</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->


      <!-- Nav Item - Charts -->

      <li class="nav-item">
        <a class="nav-link" href="/orders">
          <i class="fas fa-fw fa-shopping-cart"></i>
          <span>Order</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/reports">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Reports</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="/users">
          <i class="fas fa-fw fa-users"></i>
          <span>Users</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">


        <style>
          main {
            display: flex;
            flex-direction: row;
            /* height: 554px; */
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
            gap: 20px;
            padding: 20px;
          }

          .card {
            width: 250px;
            height: 330px;
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
        </style>
        </head>

        <body>

          <main>
            <div class="card-container">
              <?php foreach ($getAllitem as $item) { ?>
                <div class="card shadow-md">
                  <div class="overflow-hidden d-flex align-items-start p-2">
                    <img src="../../assets/items_img/<?= $item["item_image"] ?>" class="card-img-top" style="max-height: 150px;" alt="..." />
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><?= $item["item_name"] ?></h5>
                    <p class="card-text">Price: <?= $item["price"] ?></p>
                    <button class="btn btn-primary" onclick="showProductDetails('<?= $item["item_name"] ?>', <?= $item["price"] ?>)">Order Now</button>
                  </div>
                </div>
              <?php } ?>
              <div class="list">

              </div>
             
            </div>
            <!-- Table to display product details -->
            <div id="productDetails" class="aside-right">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody id="productDetailsBody">
                  <!-- Product details will be inserted here dynamically -->
                </tbody>
              </table>
              <div id="totalPrice"></div>
            </div>

          </main>

          <script>
            showProductDetails(name, price)
          </script>

          <script src="https://cdn.jsdelivr.net"></script>
        </body>

</html>