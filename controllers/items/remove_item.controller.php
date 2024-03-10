<?php

require_once "../../database/database.php";
require_once "../../models/item.model.php";

// function delete item from database
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    deleteItem($id);

    header('Location: /items');
} else {
    header('Location: /items');
}
