<?php

require "database/database.php";
require "models/customer.model.php";

// get getProductAddToCard from functoin module to display or loop
$orders = getProductAddToCard();
$pay = goToPay();

?>
<script src="../../vendor/print/print.js" defer></script>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <script src="vendor/search_category/search_vendor.js"></script>
    <script src="vendor/alert.js/category.js"></script>


    <div class="card shadow">
        <form action="../../controllers/orders/order.process.controller.php">
            <div class="card-header d-flex justify-content-between">
                <a href="#" id="printTable" class="d-none d-sm-inline-block btn btn-primary shadow-sm" onclick=" printData()"><i class="fas fa-download fa-sm text-white-50"></i> Print Receipt </a>
                <button type="submite" class="btn btn-success btn-checkout" name="payment">Payment</button>
            </div>
        </form>
        <div class="card-body">
            <div class="table-responsive" id="dataTable">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>SubTotal</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        foreach ($pay as $order) { ?>
                            <tr>
                                <td><?= $order["pay_nam"] ?></td>
                                <td><?= $order["pay_price"] ?>$</td>
                                <td><?= $order["pay_quantity"] ?></td>
                                <td class="total"><?= $order["pay_price"] * $order["pay_quantity"] ?>$</td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>

            <?php

            // Initialize the total price variable to 0
            $totalPrice = 0;

            // Loop through each row in the table
            foreach ($pay as $order) {

                // Get the total price value from each row
                $rowTotalPrice = $order["pay_price"] * $order["pay_quantity"];

                // Add the row total price to the overall total price
                $totalPrice += $rowTotalPrice;
            }
            ?>
            
            <div id="totalprice" class="d-flex justify-content-end mt-3">
                <button type="submite" class="btn btn-dark btn-checkout" name="payment" id="totalPriceBtn">Total price: <?= $totalPrice ?>$</button>
            </div>
        </div>
    </div>