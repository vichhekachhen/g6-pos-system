<?php 

require "../../database/database.php";
require "../../models/user.model.php";
session_start();

// Process edit user
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = htmlspecialchars($_POST["user_id"]);
    $name = htmlspecialchars($_POST["name"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $password = htmlspecialchars($_POST["password"]);
    $email = htmlspecialchars($_POST["email"]);
    $city = htmlspecialchars($_POST["city"]);
    $country = htmlspecialchars($_POST["county"]);
    $role = htmlspecialchars($_POST["role"]);

    $isEdit = editUser($id,$name, $password, $email, $phone, $city, $country, $role);
    $_SESSION['success']= $id;
    if ($isEdit) {

        header("Location: /users");
    }else{
        
        header('location: /users');
    }
}

