<?php
require  "models/item.model.php";
$getAllitem = getAllItems();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="css/main.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />

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
      flex-direction: column;
      height: 554px;
    }

    .aside-left {
      display: flex;
      justify-content: end;
      background-color: black;
      width: 100%;
      padding: 20px;
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
      flex: 1;
      padding: 20px;
      display: flex;
      flex-direction: row;
    }

    .card {
      width: 10rem;
      height: 190px;
      margin: 10px 0px 0px;
      padding: 10px;
      margin-left: 40px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .card-img-top {
      width: 100%;
      height: 100px;
      object-fit: cover;
      border-top-left-radius: 5px;
      border-top-right-radius: 5px;
    }

    .card-title {
      font-size: 0.8rem;
      margin-bottom: 5px;
    }

    .card-text {
      font-size: 0.7rem;
      margin-bottom: 5px;
    }

    .btn {
      font-size: 0.8rem;
      background-color: blue;
      color: white;
      border: none;
      padding: 4px 8px;
      border-radius: 5px;
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
  <!-- <head>
        <img src="image/vorn2.jpg" alt="">
    </head> -->
  <main>
    <div class="aside-right">
      <?php
      foreach ($getAllitem as $item) {
      ?>
        <div class="card">
          <img src="../../assets/items_img/<?= $item["item_image"] ?>" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title"><?= $item["item_name"] ?></h5>
            <p class="card-text">Price: <?= $item["price"] ?></p>
            <button class="btn btn-primary">Order Now</button>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </main>
</body>

</html>