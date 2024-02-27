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


    // $encryptPassword = password_hash($password, PASSWORD_BCRYPT);
    if (isset($_FILES['image']) && $_FILES['image']['error'] !== UPLOAD_ERR_NO_FILE) {

        // Image upload
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

                $isCreate = addUser($name, $password, $email, $phone, $city, $country, $nameInDB,  $role);
                header('location: /users');
            }
        } 
    } 
}
