<?php
require_once '../../database/database.php';
require_once '../../models/item.model.php';
session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['itemName']) && !empty($_POST['price']) && !empty($_POST['quantity']) && 
        !empty($_POST['categoryId']) && !empty($_POST['userId']) && !empty($_FILES['itemImage'])) {

        $itemName = htmlspecialchars($_POST['itemName']);
        $price = htmlspecialchars($_POST['price']);
        $quantity = htmlspecialchars($_POST['quantity']);
        $categoryId = htmlspecialchars($_POST['categoryId']);
        $userId = htmlspecialchars($_POST['userId']);
        $imgProfile = $_FILES['itemImage'];
        $_SESSION['success']= $itemName;

        if (checkItemImage($imgProfile)) {

            $isInsert = createItem($itemName, intval($price), intval($quantity), intval($categoryId), intval($userId), $imgProfile['name'] );

            if ($isInsert) {
                addImageToFolder($imgProfile);
            }
        } else {
            $_SESSION['error'] = "Not itemImage file!";

        }
    } else {
        $_SESSION['error'] = "Please fill all the fields";
    }
    header('Location: /items');
}