<?php
require('../../database/database.php');
require('../../models/category.model.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST["name"] !== '' && $_POST['description'] !== '') {
        $categoryName = $_POST['name'];
        $description = $_POST['description'];
        $iscreate = createCategory($categoryName, $description);
        $_SESSION['success']= $categoryName;
    }
    if ($iscreate) {
        header('location:/categories');
    } else {
        header('location:/create_category');
    }
};
