<<<<<<< HEAD

<script src="../../vendor/print/print.js" defer></script>

=======
>>>>>>> origin/print-receipt
<?php
$view_profile = $_SESSION["profile_image"];
$username  =    $_SESSION["user_name"];
$Role  =  $_SESSION["role"];
$iduser = $_SESSION["user_id"];

?>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <link rel="stylesheet" href="../../vendor/css/style.css" />
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
    </div>
</head>
<div class="btn-back">
    <a href="/items?id=<?= $iduser ?>" class="btn btn-primary p-1 mx-5">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
            <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1" />
        </svg>
    </a>
</div>

<body>
    <div class="profile-card">
        <div class="image">
            <img src="/assets/profile_img/<?= $view_profile ?>" alt="" class="profile-img" />
        </div>

        <div class="text-data">
            <span class="name"><?= $username ?></span>
            <button class="button"><?= $Role ?></button>
        </div>
        <br>
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

        <div class="btn mt-3">
            <a href="/editProfile?id=<?= $iduser ?>" class="btn btn-primary p-1 mx-2"><i class="fa fa-pen">
                    <span>Change Profile </span></i></a>
        </div>
</body>