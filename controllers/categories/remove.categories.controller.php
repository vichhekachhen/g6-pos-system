<?php
require('../../database/database.php');
require('../../models/category.model.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $isDeleted =  deleteCategory($id);
}
header('location:/categories');
