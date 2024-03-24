<?php

$iduser = $_SESSION["user_id"];
$profile = $_SESSION["profile_image"];
$username  =  $_SESSION["user_name"];
$role  =  $_SESSION["role"];
$phone  =  $_SESSION["phone"];
$email  =  $_SESSION["email"];
$city  =  $_SESSION["city"];
$country  =  $_SESSION["country"];

?>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
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

<link rel="stylesheet" href="/vendor/css/profile.css">
<div class="container mb-3">
    <div class="main-body mb-4">

        <div class="row gutters-sm ml-5 p-5 pl=5">
            <div class="col-md-4 mb-3 ">
                <div class="card  bg-light " style="width: 27rem;">
                    <div class="card-body bg-white border border-secondary rounded-left">
                        <div class="d-flex flex-column align-items-center text-center">

                            <div class="ml-5 mt-5">
                                <img src="/assets/profile_img/<?= $profile ?>" alt="Admin" class="rounded-circle mr-5" width="150" height="150">
                                <div class="mt-3">
                                    <h4 class="mr-5 pb-3"><?= $username ?></h4>
                                    <a href="/editProfile?id=<?= $iduser ?>" class="btn btn-primary mr-5" data-toggle="modal" data-target="#exampleModal<?= $iduser ?>">Change Profile</a>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal<?= $iduser ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-primary" id="exampleModalLabel"><b>Change Profile Image</b></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">

                                            <?php
                                            $profile = $_SESSION["profile_image"];
                                            ?>

                                            <div class="container bg-light">
                                                <form action="../../controllers/profile/edit_profile_process.controller.php" method="post" enctype="multipart/form-data">
                                                    <input type="text" name="role" value="admin" hidden>
                                                    <div class="form-group">
                                                        <input type="file" class="form-control" name="image" id="Profileimage" value="<?= $profile ?>">
                                                    </div>
                                                    <div class="d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-success">Save</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4 mx-5">
                <div class="card mb-3 mx-5" style="width: 27rem;">
                    <div class="card-body bg-white border border-secondary rounded-right">
                        <div class="row">
                            <div class="col-sm-4">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-6 text-secondary">
                                <?= $username ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Role</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?= $role ?>
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?= $email ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Phone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                (+855) <?= $phone ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">City</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?= $city ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Country</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?= $country ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>