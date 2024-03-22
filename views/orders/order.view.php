<?php
require "models/customer.model.php";

// get getProductAddToCard from functoin module to display or loop
$orders = getProductAddToCard();

?>
<!-- Begin Page Content -->
<script src="../../vendor/print/print.js" defer></script>
<div class="container-fluid">
    <!-- DataTales Example -->
    <script src="vendor/search_category/search_vendor.js"></script>
    <script src="vendor/alert.js/category.js"></script>

    <div class="card shadow">
        <div class="card-header py-3 d-flex justify-content-end">
            <a href="#" class="btn btn-primary">Payment</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        foreach ($orders as $order) { ?>
                            <tr>
                                <td><?= $order["id"] ?></td>
                                <td><?= $order["name"] ?></td>
                                <td><?= $order["price"] ?></td>
                                <td><?= $order["quantity"] ?></td>
                                <td class="total"><?= $order["price"] * $order["quantity"] ?></td>
                            </tr>
                        <?php } ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
