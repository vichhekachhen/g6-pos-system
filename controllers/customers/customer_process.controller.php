<?php
// session_start();
require_once "../../database/database.php";
require_once "../../models/customer.model.php";

if (isset($_POST["add"])) {

        $itemId =$_POST['preOrder_id'];
        $itemName = $_POST["item_name"];
        $category = $_POST["category"];
        $price = (int)$_POST["price"];
        $image = $_POST["image"];
        $quantity =1;
        $addToCards = addtoCard($itemName,$price,$quantity,$image);
        header('Location: /');

};
