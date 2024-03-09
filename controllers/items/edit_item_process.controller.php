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
    $oldImage = $_POST['old'];

    
    //==========edit image===========//
    if (!empty($_POST['itemName']) && !empty($_POST['price']) && !empty($_POST['quantity']) && 
    !empty($_POST['categoryId']) && !empty($_POST['userId'])) {
        if (!empty($_FILES['itemImage']['name'])){
            $checkImage = checkItemImage($itemImage);
            if ($checkImage) {
    
                $getId = getItems();
    
                if ($getId) {
                    deleteImageInFolder($oldImage);
                }
                echo $itemImage['name'];
                //update image
                addImageToFolder($itemImage);
                
                $edit = updateItem($itemName, $quantity, $price, $itemImage['name'], $id);
    
                if ($edit) {
    
                     header ('location: /items');
                } else {
                    $_SESSION['error'] = "Not itemImage file!";
                }
                
            }else {
                $_SESSION['error'] = "Please fill all the fields";
            }
            header ('location: /items');
            
        }else{
            $image = $_POST['old'];
            updateItem($itemName, $quantity, $price, $image, $id);
             header ('location: /items');
        }
    }else{
        echo 'nio';

    }

}


