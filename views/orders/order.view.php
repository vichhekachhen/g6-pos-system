<?php
require "database/database.php";
require "models/customer.model.php";

// get getProductAddToCard from functoin module to display or loop
$orders = getProductAddToCard();
$pay = goToPay();

// print_r($pay);

?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <script src="vendor/search_category/search_vendor.js"></script>
    <script src="vendor/alert.js/category.js"></script>

    <div class="card shadow">
        <form action="../../controllers/orders/order.process.controller.php">
            <div class="card-header py-3 d-flex justify-content-end">
                <!-- <a href="#" class="btn btn-primary" name="payment">Payment</a> -->
                <button type="submite" class="btn btn-success btn-checkout" name="payment">Payment</button>
            </div>
        </form>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-primary text-white">
                        <tr>
<<<<<<< HEAD
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
=======
                            <th>Category ID</th>
                            <th>Category Name</th>
                            <th>Description</th>
                            <th>Action</th>
>>>>>>> origin/print-receipt
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        foreach ($pay as $order) { ?>
                            <tr>
                                <td><?= $order["pay_id"] ?></td>
                                <td><?= $order["pay_nam"] ?></td>
                                <td><?= $order["pay_price"] ?>$</td>
                                <td><?= $order["pay_quantity"] ?></td>
                                <td class="total"><?= $order["pay_price"] * $order["pay_quantity"] ?>$</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
