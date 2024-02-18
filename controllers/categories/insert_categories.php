<?php
require('../../database/database.php');
require('../../models/category.model.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];

    $iscreate = createCategory($id, $name);
    if ($iscreate) {
        header('location:/categories');
    } else {
        header('location:/create_category');
    }
};
