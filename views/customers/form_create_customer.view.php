<?php
require  "../../models/item.model.php";
require "../../models/customer.model.php";
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


  <style>
    /* CSS styles for the main layout */
    body {
      display: flex;
      flex-direction: column;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    main {
      display: flex;
      flex-direction: row; /* Change to row to display images and table side by side */
      height: 554px;
    }

    .item {
      display: flex;
      align-items: center;
      padding: 10px 0;
      color: #333;
      text-decoration: none;
    }

    .item i {
      display: flex;
      padding: 3px 50px 5px 20px;
      font-size: 30px;
      color: white;
    }

    .aside-right {
      padding: 20px;
      flex: 1;
      overflow-y: auto;
    }

    .card-container {
      flex: 1; /* Take up remaining space */
      overflow-y: auto; /* Enable scrolling if content overflows */
      display: flex;
      flex-wrap: wrap; /* Allow cards to wrap to the next line */
      gap: 20px; /* Gap between cards */
      padding: 20px;
    }

    .card {
      width: 250px;
      height: 300px;
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

    
    /* Define the animation */
    /* Define the animation */
    @keyframes iconAnimation {
      0% {
        transform: scale(1);
      }

      50% {
        transform: scale(1.2);
      }

      100% {
        transform: scale(1);
      }
    }

    /* Apply the animation to the items */
    .nav-right .item {
      animation: iconAnimation 5s infinite;
    }
    nav {
      display: flex;
      color: white;
      background: black;
      width: 100%;
      height: 80px;
    }

    .nav-left {
      flex: 1;
      display: flex;
      flex-direction: row;
      align-items: center;
      gap: 5px;
      padding: 5px;
      margin-left: 60px;
    }

    .nav-right {
      flex: 1;
      display: flex;
      margin-left: 250px;
    }

    .nav-right.item {
      animation: iconAnimation 5s infinite;
    }

    h4 {
      font-size: 20px;
      margin-left: 20px;
    }
  </style>
</head>

<body>
  <nav>
    <div class="nav-left">
      <div class="item">
        <img src="../../assets/images/logo.png" alt="" width="40px">
      </div>
      <h4>POS SYSTEM</h4>
    </div>
    <div class="nav-right">
      <div class="item">
        <i class="fa fa-book fa-lg"></i>
      </div>
      <div class="item">
        <i class="fa fa-cutlery fa-lg"></i>
      </div>
      <div class="item">
        <i class="fa fa-apple fa-lg"></i>
      </div>
      <div class="item">
        <i class="fa fa-leaf fa-lg"></i>
      </div>
      <div class="item">
        <i class="fa fa-glass fa-lg"></i>
      </div>
      <div class="item">
        <i class="fa fa-beer fa-lg"></i>
      </div>
    </div>
  </nav>
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
    </div>
  </main>

  <script>
   showProductDetails(name, price)
  </script>

  <script src="https://cdn.jsdelivr.net"></script>
</body>

</html>
