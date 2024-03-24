<?php

require_once "../../database/database.php";
require_once "../../models/customer.model.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    deleteOrder($id);

    // Check if there are any remaining items in the cart
    $addToCards = getProductAddToCard();
    if (empty($addToCards)) {

        // If there are no remaining items, redirect to the desired page
        header('Location: /');

        exit(); // Stop further execution
    }

    // If there are remaining items, redirect to the checkout page
    header('Location: /checkOut');
    
    exit(); // Stop further execution
    
} else {

    header('Location: /checkOut');
    exit(); // Stop further execution
}
