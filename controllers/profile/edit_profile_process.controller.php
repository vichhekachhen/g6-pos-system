<?php
require_once '../../database/database.php';
require_once '../../models/edit_profile.model.php';
session_start();

// Process the profile to update the picture
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_SESSION['user_id'];
    $directory = "../../assets/profile_img/";
    $target_file = $directory . '.' . basename($_FILES['image']['name']);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $checkImageSize = getimagesize($_FILES["image"]["tmp_name"]);

    if ($checkImageSize) {
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            $_SESSION['error'] = "Wrong Image extension!";

            header('Location: /users');
            
        } else {
            $imageExtension = explode('.', $target_file)[6];
            $newFileName = uniqid();
            $nameInDirectory = $directory . $newFileName . '.' . $imageExtension;
            $nameInDB = $newFileName . '.' . $imageExtension;
            move_uploaded_file($_FILES["image"]["tmp_name"], $nameInDirectory);

            editImage($id, $nameInDB);

            // Update the session variable with the new image URL
            $_SESSION['profile_image'] = $nameInDB;

            header('location: /view_profile');
        }
    }
}
?>