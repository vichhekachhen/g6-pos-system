<?php
require('../../database/database.php');
require('../../models/category.model.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $title = $_POST['title'];
    $description = $_POST['description'];
    $iscreate = createPost($title, $description);
    if ($iscreate) {
        header('location:/categories');
    } else {
        header('location:/create_category');
    }
};
