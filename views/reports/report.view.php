<?php
require "database/database.php";
require "models/order_detail.model.php";

$getOrderDetail = getOrderDetail();

?>

<script src="../../vendor/print/print_report.js" defer></script>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
        <a href="#" id="printTable" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" onclick="printData()"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

</div>

<!-- /.container-fluid -->
<div class="container">
    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive" >
                <table class="table table-bordered mt-4 mb-4" id="dataTable"   width="100%" cellspacing="0">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                            <th>Order ID</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        foreach ($getOrderDetail as $report) { ?>
                            <tr>
                                <td><?= $report["orderDetail_id"] ?></td>
                                <td><?= $report["item_name"] ?></td>
                                <td><?= $report["price"] ?>$</td>
                                <td><?= $report["order_detail_quantity"] ?></td>
                                <td class="total"><?= $report["price"] * $report["order_detail_quantity"] ?>$</td>
                                <td><?= $report["order_id"] ?></td>
                                <td><?= $report['order_date'] ?></td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>