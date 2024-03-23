<?php

require "../../database/database.php";
require "../../models/customer.model.php";
// require "../../models/order.model.php";
if (isset($_GET["checkout"])){
    $checkout = getProductAddToCard();
    foreach ($checkout as $key) {
        $itemId = $key['item_id'];
        $id =  $key["preOrder_id"];
        $name = $key["preOrder_name"];
        $price = $key["preOrder_price"];
        $quantity = $key["preOrder_quantity"];
        $image = $key["preOrder_image"];
        $payment = payMent($itemId,$name,$price,$quantity,$image);
    }
    deleteDataPreOrders();
}
header('location: /')
?>