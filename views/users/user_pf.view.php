<?php
require_once 'database/database.php';
require "models/user.model.php";
?>
<?php
$id =  $_GET['id'];
$user = viewUser($id);
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-10 mt-3 ">
            <h4 class="m-4 text-white ">Welcome, <?= $user['user_name'] ?></h4>
        </div>
        <div class="col-sm-2 mt-5"></div>
    </div>
    <div class="row">
        <div class="col-sm-4 mt-4">
            <div class="text-center">
                <img width="50%" class="rounded-circle" src="assets/profile_img/<?= $user["profile_image"] ?>" alt="">
                <h4 class="m-4 text-white bg-primary p-1"><?= $user['user_name'] ?></h4>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <form class="form ml-2 text-white" action="##" method="post" id="profile">
                        <div class="form-row mt-4 mb-3">
                            <div class="col">
                                <strong>Role : </strong><?= $user['role'] ?>
                            </div>
                            <div class="col">
                                <strong>User Name : </strong><?= $user['user_name'] ?>
                            </div>
                        </div>
                        <hr>
                        <div class="form-row mt-4 mb-3">
                            <div class="col">
                                <strong>Phone : </strong><?= $user['phone'] ?>
                            </div>
                            <div class="col">
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
                            <a href="/users" class="btn btn-primary mt-3">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .container-fluid {
        border: 1px solid whitesmoke;
        margin: 3% 2px 5px 15%;
        padding-bottom: 3.5%;
        border-radius: 20px;
        background: #8491A3;
        width: 70%;
        margin-bottom: 10px;
    }

    .row {
        margin-right: 1rem;
        margin-left: 5rem;
    }
</style>