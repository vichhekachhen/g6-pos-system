<?php

require  "models/item.model.php";
require "models/customer.model.php";
$getAllitem = getItems();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <!-- <link rel="stylesheet" href="css/main.css" /> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" rel="stylesheet">
  <script src="../../vendor/print/print.js" defer></script>

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
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="../../models/customer.model.php"></script>
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
      <li class="nav-item mt-3">
        <a class="nav-link" href="#">
          <i class="fas fa-home mt-5 ml-3" style="font-size:30px" id="home"></i><br>

      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="fas fa-book mb-5 ml-3" style="font-size:30px" id="book"></i>
        </a>
      </li>


      <!-- Nav Item - Charts -->

      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-hamburger mb-2 ml-3" style="font-size:30px" id="food"></i>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-tshirt mb-1 ml-3" style="font-size:30px" id="shirt"></i>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <!-- <i class="fas fa-fw fa-users"></i> -->
          <i class="fas fa-apple-alt mb-5 ml-3" style="font-size:30px" id="fruite"></i>
      </li>

    </ul>

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
          <!-- <form action="../../controllers/customers/customer_process.controller.php" method="post"> -->
          <div class="card-container">
            <?php foreach ($getAllitem as $item) { ?>
              <div class="card shadow-md">
                <div class="overflow-hidden d-flex align-items-start p-2">
                  <img src="../../assets/items_img/<?= $item["item_image"] ?>" class="card-img-top" style="max-height: 150px;" alt="..." />
                </div>
                <div class="card-body">
                  <h5 class="card-title d-flex justify-content-center" name="name"><?= $item["item_name"] ?></h5>
                  <p class="card-text d-flex justify-content-center">Price: <?= $item["price"] ?></p>
                  <p class="card-text" style="display: none;">category: <?= $item["category_name"] ?></p>
                  <form action="../../controllers/customers/customer_process.controller.php" method="post">
                    <input type="hidden" name="item_id" value="<?= $item["item_id"] ?>">
                    <input type="hidden" name="item_name" value="<?= $item["item_name"] ?>">
                    <input type="hidden" name="category" value="<?= $item["category_name"] ?>">
                    <input type="hidden" name="price" value="<?= $item["price"]?>">
                    <input type="hidden" name="image" value="<?= $item["item_image"]?>">
                    <button type="submit" class="btn btn-primary" name="add">Add to Card</button>
                  </form>

                </div>
              </div>
            <?php } ?>
            <div class="list">

            </div>

          </div>
          <!-- </form> -->
          <!-- Table to display product details -->
          <form action="../../controllers/customers/customer_process.controller.php" method="post">
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
              <div id="totalPrice" name="total-price">Hello kon papa</div>
              <div class="btn-container d-flex flex-column">
                <button class="btn btn-danger mt-3">Cancel</button>
                <button type="submite" class="btn btn-primary mt-3">Checkout</button>
              </div>

            </div>
          </form>

        </main>

        <script>
          showProductDetails(name, price);
        </script>
        <script src="https://cdn.jsdelivr.net"></script>
        <script src="../../models/customer.js"></script>

      </body>

</html>