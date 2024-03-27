<?php
require "../../database/database.php";
require "../../models/order.model.php";
require "../../models/customer.model.php";
require "../../models/order_detail.model.php";
require "../../models/isPayment.model.php";

if (isset($_GET["payment"])) {
    $payMent = goToPay();
    $orderId = getLastOrderId();
    $date= date("Y-m-d");
    $tableOrder = orders($date);
    $isPaying = isPayingLastId();
    $theAction = "true";
    $thePay = ispayAlready($theAction,$isPaying);
    foreach ($payMent as $pay) {
        $id = $pay["pay_id"];
        $quantity = $pay["pay_quantity"];
        $productId = $pay["item_id"];
        $payNow = orderDetail($productId,$orderId,$quantity);
    }
    deleteDataPayMent();
}
header("location: /orders");

