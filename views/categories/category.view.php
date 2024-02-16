 <!-- Begin Page Content -->
 < class="container-fluid">

     <!-- Page Heading -->
     <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>

     <!-- DataTales Example -->
     <div class="card shadow">
         <div class="card-header py-3 d-flex justify-content-between">
             <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
             <a href="/create_category" class="btn btn-primary">create category</a>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>ID</th>
                             <th>Title</th>
                             <th>Description</th>
                             <th>Action</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php

                            $isPosts =  getPosts();
                            foreach ($isPosts as $isPost) :
                            ?>
                             <tr>
                                 <td><?= $isPost['id'] ?></td>
                                 <td><?= $isPost['title'] ?></td>
                                 <td><?= $isPost['description'] ?></td>
                                 <td class="d-gride gap-5">
                                     <a href="controllers/categories/remove.categories.controller.php?id=<?= $isPost['id'] ?>" class="text-danger p-2"><i class="fa fa-trash"></i></a>
                                     <a href="/edit_items?id=<?= $isPost['id'] ?>" class="text-danger p-2"><i class="fa fa-pen"></i></a>
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