<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card shadow ">
        <div class="card-header py-3 d-flex justify-content-between">
        <script src="vendor/search_category/search_vendor.js"></script>
            <form id="searchForm" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                 <div class="input-group">
                     <input type="text" class="form-control bg-light border-0 small" name="search" id="searchInput" placeholder="Search here..." value=""">
                    <div class=" input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                 </div>
            </form>
            <a href="/create_items" class="btn btn-primary">Create Item</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ProductID</th>
                            <th>ProductName</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>CategoryName</th>
                            <th>UserName</th>
                            <th>ProductImage</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $items = getItems();
                        foreach ($items as $item) {
                            
                        ?>  
                            <tr>
                                <td><?= $item['item_id']?></td>
                                <td><?= $item['item_name']?></td>
                                <td><?= $item['price'] ?></td>
                                <td><?= $item['quantity']?></td>
                                <td><?= $item['category_name']?></td>
                                <td><?= $item['user_name']?></td>

                                <td><img width="30px" height="30px" class="rounded-circle" src="../../assets/items_img/<?= $item["item_image"]?>" alt=""></td>
                                <td class="d-gride gap-5">
                                    <a href="controllers/items/remove_item.controller.php?id=<?=$item['item_id']?>" class="text-danger p-2"><i class="fa fa-trash"></i></a>
                                    <a href="/editItem?id=<?=$item['item_id']?>" class="text-danger p-2"><i class="fa fa-pen"></i></a>
                                </td>
                            </tr>
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