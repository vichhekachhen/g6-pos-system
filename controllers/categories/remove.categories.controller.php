<?php
require('../../database/database.php');
require('../../models/category.model.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $isDeleted =  deletePost($id);
}
header('location:/categories');
 