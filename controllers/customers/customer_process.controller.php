<?php
// session_start();
require_once "../../database/database.php";

if (isset($_POST["add"])) {

        $itemId =$_POST['item_id'];
        $itemName = $_POST["item_name"];
        $category = $_POST["category"];
        $price = $_POST["price"];
        $image = $_POST["image"];
        echo $itemId ." " . $itemName ." " . $category . " " . $price . " " . $image;
}
