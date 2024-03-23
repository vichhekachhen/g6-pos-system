<?php
// session_start();
require_once "../../database/database.php";
require_once "../../models/customer.model.php";

if ($_SERVER['REQUEST_METHOD']=="POST") {

        $id = $_POST['id'];
        $quantity =$_POST['quantity'];
        echo $id;
        echo $quantity;
        $addToCards = addMoreQuantity($quantity,$id);
        header('Location: /checkOut');
};