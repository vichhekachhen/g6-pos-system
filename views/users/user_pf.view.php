<?php
require_once 'database/database.php';
require "models/user.model.php";
?>
<?php
$id =  $_GET['id'];
$user = viewUser($id);
?>

<body class="bg-primary">
    <div class="container-fluid bg-white">
        <div class="row ">
            <div class="col-sm-10 mt-4 ml-4 ">
                <h4 class="m-4">Welcome, <?= $user['user_name'] ?></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 mt-1 ml-4 ">
                <div class="text-center">
                    <img width="45%" class="rounded-circle" src="assets/profile_img/<?= $user["profile_image"] ?>" alt="">
                    <h4 class="mt-5 text-white bg-primary p-1"><?= $user['user_name'] ?></h4>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <form class="form ml-2" action="##" method="post" id="profile">
                            <div class="form-row mt-4 mb-3">
                                <div class="col">
                                    <strong>Role : </strong><?= $user['role'] ?>
                                </div>
                                <div class="col">
                                    <strong>Phone :</strong>(+855 )<?= $user['phone'] ?>
                                </div>
                            </div>
                            <hr>
                            <div class="form-row mt-4 mb-3">
                                <div class="col-6">
                                    <strong>Email : </strong><?= $user['email'] ?>
                                </div>
                            </div>
                            <hr>
                            <div class="form-row mt-4 mb-3">
                                <div class="col">
                                    <strong>City : </strong><?= $user['city'] ?>
                                </div>
                                <div class="col">
                                    <strong>Country : </strong><?= $user['country'] ?>
                                </div>
                            </div>
                            <hr>
                            <div class="form-row d-flex justify-content-end mt-6 ">
                                <a href="/users" class="btn btn-primary mt-5">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<style>
    .container-fluid {
        width: 70%;
        padding-bottom: 3.5%;
        margin-top: 80px;
        border-radius: 20px;
    }
</style>