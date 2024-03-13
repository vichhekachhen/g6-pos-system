<?php

$view_profile = $_SESSION["profile_image"];
$username  =    $_SESSION["user_name"];
$Role  =  $_SESSION["role"];
$iduser = $_SESSION["user_id"];

?>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../vendor/css/style.css" />
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
                    <span>Edit:</span></i></a>
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

            <a href="/items">
                <button class="button">Back</button>
            </a>

        </div>

    </div>
</body>