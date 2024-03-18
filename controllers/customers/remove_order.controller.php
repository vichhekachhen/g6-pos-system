<?php 

require_once "../../database/database.php";
require_once "../../models/customer.model.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    echo $id;
   deleteOrder($id);
   header('Location: /checkOut');
}
else{
    header('Location: /checkOut');
}
