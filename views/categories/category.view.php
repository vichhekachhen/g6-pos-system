 <!-- Begin Page Content -->
    <div class="container-fluid">
     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>

     <!-- DataTales Example -->
     <div class="card shadow">
         <div class="card-header  py-3 d-flex justify-content-between">
             <a href="/create_category" class="btn btn-primary">Create Category</a>
             <div class="input-group col-5">
                 <input type="submite" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" class="form-control" placeholder="search category">
             </div>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>Category ID</th>
                             <th>Category Name</th>
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
                                 <td class="d-gride gap-5">
                                     <a href="../../controllers/categories/remove_category.controller.php?id=<?= $isCategory['category_id'];?>" class="text-danger p-2"><i class="fa fa-trash"></i></a>
                                     <a href="/edit_items?id=<?= $isCategory['category_id'] ?>" class="text-danger p-2"><i class="fa fa-pen"></i></a>
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