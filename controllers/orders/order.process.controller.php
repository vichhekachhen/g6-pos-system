<?php
require "../../database/database.php";
require "../../models/order.model.php";
require "../../models/customer.model.php";
require "../../models/order_detail.model.php";
if (isset($_GET["payment"])) {
    $payMent = goToPay();
    $orderId = getLastOrderId();
    $date= date("Y-m-d");
    $tableOrder = orders($date);  
    foreach ($payMent as $pay) {
        $id = $pay["pay_id"];
        // $name = $pay["pay_nam"];
        // $price = $pay["pay_price"];
        $quantity = $pay["pay_quantity"];
        // $image = $pay["pay_image"];
        $productId = $pay["item_id"];
        $payNow = orderDetail($productId,$orderId,$quantity);
    }
    deleteDataPayMent();
}
header("location: /orders");

