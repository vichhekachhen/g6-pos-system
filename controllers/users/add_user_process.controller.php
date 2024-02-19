<?php
require '../../database/database.php';
require '../../models/user.model.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST["name"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $password = htmlspecialchars($_POST["password"]);
    $email = htmlspecialchars($_POST["email"]);
    $city = htmlspecialchars($_POST["city"]);
    $country = htmlspecialchars($_POST["county"]);
    $role = htmlspecialchars($_POST["role"]);

    $isCreate = addUser($name, $password, $email, $phone, $city, $country, $role);
    if ($isCreate) {
        header("Location: /users");
    }else{
        header('location: /addUser');
    }
}
