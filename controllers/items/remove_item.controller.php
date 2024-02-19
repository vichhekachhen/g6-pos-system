

<?php

    require_once "../../database/database.php";
    require_once "../../models/item.model.php";
 // function delete item from database
    $id = $_GET['id'];
    if (isset($id)){

        deleteItem($id);

    }
    
    header('Location:/items');

// ?>