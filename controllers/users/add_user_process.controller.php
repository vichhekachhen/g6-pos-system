<?php
require '../../database/database.php';
require '../../models/user.model.php';
session_start();

function isStrongPassword($password)
{
    $uppercaseChars = preg_match('@[A-Z]@', $password);
    $lowercaseChars = preg_match('@[a-z]@', $password);
    $numberChars = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('/[!@#$%^&*()\-_=+{};:,<.>]/', $password);
    return strlen($password) >= 10 && $uppercaseChars && $lowercaseChars && $numberChars && $specialChars;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST["name"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $password = htmlspecialchars($_POST["password"]);
    $email = htmlspecialchars($_POST["email"]);
    $city = htmlspecialchars($_POST["city"]);
    $country = htmlspecialchars($_POST["county"]);
    $role = htmlspecialchars($_POST["role"]);


    if (!empty($name) && !empty($email) && !empty($password)) {
        if (isStrongPassword($password)) {
            $encryptedPassword = password_hash($password, PASSWORD_BCRYPT);

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
                        exit;
                    } else {
                        $imageExtension = explode('.', $target_file)[6];
                        $newFileName = uniqid();
                        $nameInDirectory = $directory . $newFileName . '.' . $imageExtension;
                        $nameInDB = $newFileName . '.' . $imageExtension;
                        move_uploaded_file($_FILES["image"]["tmp_name"], $nameInDirectory);

                        $isCreate = addUser($name, $encryptedPassword, $email, $phone, $city, $country, $nameInDB, $role);
                        $_SESSION['create_success']= $name;
                        header('location: /users');
                        exit;
                    }
                }
            } else {
                echo '<script>alert("Please provide a picture!"); window.location.href = "/addUsers";</script>';
                exit;
            }
        } else {
            echo '<script>alert("Please enter strong password!"); window.location.href = "/addUsers";</script>';
            exit;
        }
    }
}
