<!-- Begin Page Content -->
<script src="../../vendor/print/print.js" defer></script>
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

    <div class="card shadow">
        <div class="card-header py-3 d-flex justify-content-center">
            <form id="searchForm" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" name="search" id="searchInput" placeholder="Search here..." value="">
                    <div class=" input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
        </div>
        </form>
        <a href="/create_category" class="btn btn-primary">Create Category</a>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="bg-primary text-white">

                    <tr>
                        <th>Category ID</th>
                        <th>Category Name</th>
                        <th>Description</th>
                        <th>Action</th>
                        <!-- <div>
                            <button class="text-muted"  class="btn" class="btn-primary" onclick="Getprint()">Print</button>
                        </div> -->
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $isCategories =  getCategories();
                    foreach ($isCategories as $isCategory) :
                    ?>
                        <tr>
                            <td><?= $isCategory['category_id'] ?></td>
                            <td><?= $isCategory['category_name'] ?></td>
                            <td><?= $isCategory['description'] ?></td>
                            <td class="d-gride gap-5">
                                <a class="text-danger p-2" data-toggle="modal" data-target="#exampleModal<?= $isCategory['category_id'] ?>"><i class="fa fa-trash"></i></a>
                                <a href="/edit_category?id=<?= $isCategory['category_id'] ?>" class="text-primary p-2"><i class="fa fa-pen"></i></a>
                            </td>

                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal<?= $isCategory['category_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete Category <b><?php echo $isCategory['category_name'] ?></b></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you sure you want to delete category <b class="text-danger"><?php echo $isCategory['category_name'] ?></b>?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                                        <a type="button" class="btn btn-danger" href="../../controllers/categories/remove_category.controller.php?id=<?= $isCategory['category_id']; ?>">Delete</a>
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
<!-- /.container-fluid -->