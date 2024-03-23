<?php
require "database/database.php";
require "models/order_detail.model.php";

$getOrderDetail = getOrderDetail();

?>

<script src="../../vendor/print/print.js" defer></script>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>
    <div>
        <button type="button" id="printTable" class="btn btn-primary" onclick=" printData()">Print</button>

    </div>

</div>
<!-- /.container-fluid -->
<div class="container">
    <div class="card shadow">
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
                            <th>Order ID</th>
                            <th>Date</th>
                            <th>Prodct ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($getOrderDetail as $report) { ?>
                            <tr>
                                <td><?= $report["orderDetail_id"] ?></td>
                                <td><?= $report["item_name"]?></td>
                                <td><?= $report["price"]?>$</td>
                                <td><?= $report["order_detail_quantity"] ?></td>
                                <td class="total"><?= $report["price"] * $report["order_detail_quantity"] ?>$</td>
                                <td><?= $report["order_id"] ?></td>
                                <td><?= $report['order_date'] ?></td>
                                <td><?= $report["item_id"] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>