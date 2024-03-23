<?php
require "models/category.model.php";
require "models/user.model.php";
$items = getCategories();
$users = getUsers();
?>

<script src="vendor/search_category/search_vendor.js"></script>
<script src="vendor/search_category/filter.js"></script>
<script src="vendor/alert.js/category.js"></script>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- //  code alert when the table item have created success -->
    <?php
    if (isset($_SESSION['success'])) :
    ?>
        <div class="alert alert-success" role="alert" id="success-alert">
            <strong>Well done!</strong> You have successfully Create Product <?php echo $_SESSION['success']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php
    endif;
    unset($_SESSION['success']);
    ?>

    <div class="card shadow ">
        <div class="card-header py-3 d-flex justify-content-between">
            <div class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100">
                <select class="form-control" id="categoryId" name="categoryId" onchange="filterTable()">
                    <option selected>All Categories</option>

                    <?php
                    foreach ($items as $item) { ?>
                        <option value="<?= $item['category_id'] ?>"><?= $item['category_name'] ?></option>
                    <?php } ?>

                </select>
                </select> 
            </div>
            <div class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100">
                <select class="form-control" id="userId" name="userId" onchange="filterTable()">
                    <option selected>All Employee</option>
                    <?php
                    foreach ($users as $user) { ?>
                        <option value="<?= $user['user_id'] ?>"><?= $user['user_name'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <a href="/create_items" class="btn btn-primary ml-2">Create product</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered mt-4 mb-4" id="dataTableUser" width="100%" cellspacing="0">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Category Name</th>
                            <th>Employee Name</th>
                            <th>Product Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $items = getItems();
                        foreach ($items as $item) {
                        ?>
                            <tr data-category="<?= $item['category_name'] ?>">
                                <td><?= $item['item_id'] ?></td>
                                <td><?= $item['item_name'] ?></td>
                                <td><?= "$" . $item['price'] ?></td>
                                <td><?= $item['quantity'] ?></td>
                                <td><?= $item['category_name'] ?></td>
                                <td><?= $item['user_name'] ?></td>
                                <td><img width="60px" height="60px" style="fl;" class="rounded-square" src="../../assets/items_img/<?= $item["item_image"] ?>" alt=""></td>
                                <td class="d-grid gap-5">
                                    <a class="text-danger" data-toggle="modal" data-target="#exampleModal<?= $item['item_id'] ?>"><i class="fa fa-trash"></i></a>
                                    <a href="/editItem?id=<?= $item['item_id'] ?>" class="text-primary p-2"><i class="fa fa-pen"></i></a>
                                </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal<?= $item['item_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete Product <b><?= $item['item_name'] ?></b></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete this product <b class="text-danger"><?= $item['item_name'] ?></b> ?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <a type="button" class="btn btn-danger" href="controllers/items/remove_item.controller.php?id=<?= $item['item_id'] ?>">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
