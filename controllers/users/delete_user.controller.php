<?php
require '../../database/database.php';
require '../../models/user.model.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    deleteUser($id);
    
    header('location:/users');
} else {
    header('location:/users');
}
