<div class="container-fluid">
    <!-- DataTales Example -->
    <script src="vendor/alert.js/category.js"></script>
    <?php
    if (isset($_SESSION['success'])) :
    ?>
        <div class="alert alert-success" role="alert" id="success-alert">
            <strong>Well done!</strong> You have successfully updated the user <?php echo $_SESSION['success']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php
    endif;
    unset($_SESSION['success']);
    ?>

    <?php
    if (isset($_SESSION['create_success'])) :
    ?>
        <div class="alert alert-success" role="alert" id="success-alert">
            <strong>Well done!</strong> You have successfully created user <?php echo $_SESSION['create_success']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php
    endif;
    unset($_SESSION['create_success']);
    ?>
    <div class="card shadow ">
        <div class="card-header py-3 d-flex justify-content-end align-items-center">
            <button class="btn btn-primary"><a href="/addUsers" class="text-white">Add User</a></button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered mt-4" id="dataTableUser" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <!-- <th>Phone</th> -->
                            <th>Image</th>
                            <!-- <th>Role</th> -->
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $users = getUsers();
                        foreach ($users as $user) : ?>
                            <tr>
                                <td><?php echo $user["user_id"] ?></td>
                                <td><?php echo $user["user_name"] ?></td>
                                <td><?php echo $user["email"] ?></td>
                                <td><img width="50px" height="50px" class="rounded-circle" src="assets/profile_img/<?= $user["profile_image"] ?>" alt=""></td>
                                <td class="d-grid gap-5">
                                    <a class="text-danger p-2" data-toggle="modal" data-target="#exampleModal<?= $user["user_id"] ?>" class="text-danger p-2"><i class="fa fa-trash"></i></a>
                                    <a href="/edit_users?id=<?= $user["user_id"] ?>" class="text-primary p-2"><i class="fa fa-pen"></i></a>
                                    <a href="/viewUser?id=<?= $user["user_id"] ?>" class="fa fa-eye  p-2"><i aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal<?= $user["user_id"] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete Employee <?= $user["user_name"] ?></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete Employee <?= $user["user_name"] ?> ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <a class="btn btn-danger" href="../../controllers/users/delete_user.controller.php?id=<?= $user["user_id"] ?>">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->