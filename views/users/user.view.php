<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow ">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">User Page</h6>
            <button class="btn btn-primary"><a href="/addUsers" class="text-white">Add User</a></button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Password</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        
                        $users = getUser();
                        foreach ($users as $user):
                        
                        ?>
                        <tr>
                            <td><?php echo $user["user_id"] ?></td>
                            <td><?php echo $user["user_name"] ?></td>
                            <td><?php echo $user["password"] ?></td>
                            <td><?php echo $user["email"] ?></td>
                            <td><?php echo $user["phone"] ?></td>
                            <td><?php echo $user["city"] ?></td>
                            <td><?php echo $user["country"]?></td>
                            <td><?php echo $user["role"] ?></td>
                            <td class="d-grid gap-5">
                                <a href="#" class="text-danger p-2"><i class="fa fa-trash"></i></a>
                                <a href="#" class="text-danger p-2"><i class="fa fa-pen"></i></a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
</div>
<!-- /.container-fluid -->