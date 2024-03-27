<?php 

require "../../database/database.php";
require "../../models/order.model.php";
require "../../models/isPayment.model.php";

if(isset($_GET["cancel"])){
    $isCancel = deleteDataPayMent();
    $theCancel = deleteIsPay();
}

header("location:/orders");

?>