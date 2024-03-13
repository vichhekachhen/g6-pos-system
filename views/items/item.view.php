<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow ">
        <div class="card-header py-3 d-flex justify-content-between">
            <script src="vendor/search_category/search_vendor.js"></script>
            <script src="vendor/search_category/search_vendor.js"></script>
            <form id="searchForm" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" name="search" id="searchInput" placeholder="Search product here..." value="">
                    <div class=" input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
            <a href="/create_items" class="btn btn-primary">Create product</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
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
                            <tr>
                                <td><?= $item['item_id'] ?></td>
                                <td><?= $item['item_name'] ?></td>
                                <td><?= $item['price'] ?></td>
                                <td><?= $item['quantity'] ?></td>
                                <td><?= $item['category_name'] ?></td>
                                <td><?= $item['user_name'] ?></td>

                                <td><img width="60px" height="60px" style="fl;" class="rounded-square" src="../../assets/items_img/<?= $item["item_image"] ?>" alt=""></td>
                                <td class="d-gride gap-5">
                                    <a class="text-danger" data-toggle="modal" data-target="#exampleModal<?= $item['item_id'] ?>"><i class="fa fa-trash"></i></a>
                                    <a href="/editItem?id=<?= $item['item_id'] ?>" class="text-primary p-2"><i class="fa fa-pen"></i></a>
                                </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal<?= $item['item_id'] ?>"tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete Product <?= $item['item_name'] ?></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete this product <?= $item['item_name'] ?> ?
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

</div>
<!-- /.container-fluid -->