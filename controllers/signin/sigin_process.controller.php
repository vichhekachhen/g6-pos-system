<?php
session_start();
require "../../database/database.php";
require "../../models/user.model.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Escape the query string to prevent SQL injection.
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // Get data from database
    $user = getUser($email);

    // Check if user exists
    if (count($user) > 0) {
        
        // Check if password is correct
        if (password_verify($password, $user[2])) {
            $_SESSION['user_id'] = $user['user_id'];

            $_SESSION["user_name"] = $user['user_name'];
            $_SESSION["email"] = $user['email'];
            $_SESSION["password"] = $user['password'];
            $_SESSION["phone"] = $user['phone'];
            $_SESSION["city"] = $user['city'];
            $_SESSION["country"] = $user['country'];
            $_SESSION["role"] = $user['role'];
            $_SESSION["profile_image"] = $user['profile_image'];

            if ($user[8] === 'Admin') {

                header('Location: /admin');

            } else {

                header('Location: /orders');

            }
        } else {
            echo '<script>alert("Password is incorrect!"); window.location.href = "/signin";</script>';
        }
    } else {
        echo '<script>alert("User not found!"); window.location.href = "/signin";</script>';
    }
}
