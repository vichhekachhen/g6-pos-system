<?php
require '../../database/database.php';
require '../../models/user.model.php';

if(isset($_GET['id'])){
    deleteUser($_GET['id']);

}
header('location:/users');




