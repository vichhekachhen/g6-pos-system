<?php
session_start();
require "../../database/database.php";
require "../../models/user.model.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    // Query the database to check user credentials
    global $connection;
    $stmt = $connection->prepare("SELECT user_id,user_name, email, password,phone,city,country FROM users WHERE email = :email");
    $stmt->execute([':email' => $email]);
    $user = $stmt->fetch();

    // Verify the password without hashing
    if (!empty($_POST['email']) and !empty($_POST['password'])) {
        if ($_POST["email"] == $user["email"] and $_POST["password"]== $user["password"]) {

            // Set session variables
            $_SESSION["user_id"] = $user['user_id'];
            $_SESSION["email"] = $user['email'];
            $_SESSION["password"] = $user['password'];
            $_SESSION["phone"] = $user['phone'];

            // Redirect to the dashboard
            header("Location: /admin");
            exit;
        }
        else{
            header("Location: /sigin");
        }
    } else {
        // Invalid credentials, redirect to the login page with an error message
        header("Location: /sigin");
        exit;
    }
} else {
    // Redirect to the login page if the form is not submitted
    header("Location: /sigin");
    exit;
}
