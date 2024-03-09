<?php

$view_profile = $_SESSION["profile_image"];
$username  =    $_SESSION["user_name"];
// $Email = $_SESSION["email"];
$Role  =  $_SESSION["role"];
$iduser = $_SESSION["user_id"];

// require_once "./views/profile/edit_profile.view.php";
?>

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>



<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--<title>Profile Card UI Design</title>-->

    <!-- CSS -->
    <link rel="stylesheet" href="../../vendor/css/style.css" />

    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
    <div class="profile-card">
        <div class="image">
            <img src="/assets/profile_img/<?= $view_profile ?>" alt="" class="profile-img" />
        </div>

        <div class="text-data">
            <span class="name"><?= $username ?></span>
            <a href="/editProfile?id=<?= $iduser ?>" class="text-danger p-2"><i class="fa fa-pen">
                <span>Edit:</span>
                    <!-- <button class="button">Edit</button> -->

                </i></a>

        </div>




        <div class="media-buttons">
            <a href="#" style="background: #4267b2" class="link">
                <i class="bx bxl-facebook"></i>
            </a>
            <a href="#" style="background: #1da1f2" class="link">
                <i class="bx bxl-twitter"></i>
            </a>
            <a href="#" style="background: #e1306c" class="link">
                <i class="bx bxl-instagram"></i>
            </a>
            <a href="#" style="background: #ff0000" class="link">
                <i class="bx bxl-youtube"></i>
            </a>
        </div>

        <div class="buttons">
            <button class="button"><?= $Role ?></button>

            <a href="/users">
                <button class="button">Back</button>
            </a>

        </div>

    </div>
</body>

</html>