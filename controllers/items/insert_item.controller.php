<?php
require_once '../../database/database.php';
require_once '../../models/item.model.php';



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // $itemId = htmlspecialchars($_POST['itemId']);
    $itemName = htmlspecialchars($_POST['itemName']);
    $price = htmlspecialchars($_POST['price']);
    $quantity = htmlspecialchars($_POST['quantity']);
    $categoryId = htmlspecialchars($_POST['categoryId']);
    $userId = htmlspecialchars($_POST['userId']);
    $imgProfile = $_FILES['itemImage'];
    // print_r($imgProfile);

    // echo $itemName ." ".$price." ".$quantity." ".$categoryId." ".$userId;
    $isInsert=createItem( $itemName, $price, $quantity,$categoryId, $userId,  $imgProfile );
    if ($isInsert) {
        header('location: /items');
    } else {
        header('location: /create_items');
    }

//     if (!empty($itemName) && !empty($price) && !empty($price) && !empty($quantity) && !empty($categoryId) && !empty($userId)) {

//         if (checkItemImage($imgProfile)) {
//             addImageToFolder($imgProfile);
//         } else {
//             $_SESSION['error'] = "Not itemImage file!";
//             header('Location: /items');
//         }
//         // createItem( $itemName, $price, $quantity,$categoryId, $userId,  $imgProfile );
//     } else {
//         $_SESSION['error'] = "Please fill all the fields";
//         header('Location: /items');
//     }
// }
}