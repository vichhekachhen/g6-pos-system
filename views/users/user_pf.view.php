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
        <div class="col-sm-10 ">
            <h4 class="m-4">Welcome, <?= $user['user_name'] ?></h4>
        </div>
        <div class="col-sm-2"><a href="/users" class="pull-right"><img class="img-circle img-responsive" src=""></a></div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="text-center">
                <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                <h4 class="m-2"><?= $user['user_name'] ?></h4>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="tab-content">
                <div class="tab-pane active" id="home">
                    <form class="form" action="##" method="post" id="profile">
                        <div class="form-row mt-4 mb-3">
                            <div class="col">
                                <strong>User ID</strong><input type="text" class="form-control" value="<?= $user['user_id'] ?>" name="user_id">
                            </div>
                            <div class="col">
                                <strong>User Name</strong><input type="text" class="form-control" value="<?= $user['user_name'] ?>" name="user_name">
                            </div>
                        </div>
                        <div class="form-row mt-4 mb-3">
                            <div class="col">
                                <strong>Phone</strong><input type="text" class="form-control" value="<?= $user['phone'] ?>" name="phone">
                            </div>
                            <div class="col">
                                <strong>Email</strong><input type="text" class="form-control" value="<?= $user['email'] ?>" name="email">
                            </div>
                        </div>
                        <div class="form-row mt-4 mb-3">
                            <div class="col">
                                <strong>City</strong><input type="text" class="form-control" value="<?= $user['city'] ?>" name="city">
                            </div>
                            <div class="col">
                                <strong>Country</strong><input type="text" class="form-control"value="<?= $user['country'] ?>" name="country">
                            </div>
                        </div>
                        <div class="form-row mt-4 mb-3">
                            <div class="col-6">
                                <strong>Role</strong><input type="text" class="form-control" value="<?= $user['role'] ?>" name="role">
                            </div>
                        </div>
                        <div class="form-row d-flex justify-content-end mt-3">
                            <a href="/users" class="btn btn-primary mr-3">Back</a>
                        </div>
                    </form>

                    <hr>