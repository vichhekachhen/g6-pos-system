<?php
require '../../database/database.php';
require '../../models/user.model.php';

// process delte user (delete by id that you want to delete)
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    deleteUser($id);
    
    header('location:/users');
} else {

    header('location:/users');
}
