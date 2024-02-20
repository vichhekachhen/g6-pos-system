 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- DataTales Example -->
     <script src="vendor/search_category/search_vendor.js"></script>
     <div class="card shadow">

         <div class="card-header py-3 d-flex justify-content-center">
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
         <a href="/create_category" class="btn btn-primary">Create Category</a>

     </div>
     <div class="card-body">
         <div class="table-responsive">
             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 <thead>
                     <tr>
                         <th>Category ID</th>
                         <th>Category Name</th>
                         <th>Description</th>
                         <th>Action</th>
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
                                 <a href="../../controllers/categories/remove_category.controller.php?id=<?= $isCategory['category_id']; ?>" class="text-danger p-2"><i class="fa fa-trash"></i></a>
                                 <a href="/edit_category?id=<?= $isCategory['category_id'] ?>" class="text-primary p-2"><i class="fa fa-pen"></i></a>
                             </td>

                         </tr>

                     <?php
                        endforeach
                        ?>
                 </tbody>
             </table>
         </div>
     </div>
 </div>
 </div>
 <!-- /.container-fluid -->