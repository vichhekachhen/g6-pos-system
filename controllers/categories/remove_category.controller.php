<?php

    require_once "../../database/database.php";
    require_once "../../models/category.model.php";

    echo $_GET['id'];

    if (isset($_GET['id'])){
        
        deleteCategory($_GET['id']);

    }

    header('Location:/categories');

?>