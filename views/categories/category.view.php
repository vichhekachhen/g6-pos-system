<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <script src="vendor/search_category/search_vendor.js"></script>
    <script src="vendor/alert.js/category.js"></script>

    <?php
    if (isset($_SESSION['success'])) :
    ?>
        <div class="alert alert-success" role="alert" id="success-alert">
            <strong>Well done!</strong> You successfully created Category: <?php echo $_SESSION['success']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    <?php
    endif;
    unset($_SESSION['success']);
    ?>

    <div class="d-flex justify-content-end align-items-center">
        <a href="/create_category" class="btn btn-primary">Create Category</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered mt-4 mb-4" id="dataTableUser" width="100%" cellspacing="0">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>ID</th>
                        <th>Category Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $categories = getCategories();
                    foreach ($categories as $category) :
                    ?>
                        <tr>
                            <td><?= $category['category_id'] ?></td>
                            <td><?= $category['category_name'] ?></td>
                            <td><?= $category['description'] ?></td>
                            <td class="d-grid gap-5">
                                <a class="text-danger" data-toggle="modal" data-target="#exampleModal<?= $category['category_id'] ?>"><i class="fa fa-trash"></i></a>
                                <a href="/edit_category?id=<?= $category['category_id'] ?>" class="text-primary p-2"><i class="fa fa-pen"></i></a>
                            </td>
                        </tr>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal<?= $category['category_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete Category <b><?= $category['category_name'] ?></b></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete this category <b class="text-danger"><?= $category['category_name'] ?></b> ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <a type="button" class="btn btn-danger" href="controllers/categories/remove.categories.controller.php?id=<?= $category['category_id'] ?>">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endforeach
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
</div>