<?php
require_once '../../database/database.php';
require_once '../../models/item.model.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $itemId = $_POST['itemId'];
    $itemName = $_POST['itemName'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $categoryId = $_POST['categoryId'];
    $userId = $_POST['userId'];
    $itemImage = $_POST['itemImage'];

    $isCreated = createItem($itemId, $itemName, $price, $quantity, $categoryId, $userId, $itemImage);

    if ($isCreated) {
        header('Location:/items');
    } else {
        header ('location:/create_items');
    }

}