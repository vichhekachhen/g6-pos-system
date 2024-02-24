<?php 

require_once "../../database/database.php";
require_once "../../models/item.model.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_POST['item_id'];
    $itemName = htmlspecialchars($_POST['itemName']);
    $price = htmlspecialchars($_POST['price']);
    $quantity = htmlspecialchars($_POST['quantity']);
    $categoryId = htmlspecialchars($_POST['categoryId']);
    $userId = htmlspecialchars($_POST['userId']);
    $itemImage = $_FILES['itemImage'];

    $edit = updateItem($id, $itemName, $price, $quantity, $categoryId, $userId, $itemImage);

    if ($edit) {
        header('Location: /items');
    }else {
        header('Location: /editItem');
    }

    

}