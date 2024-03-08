<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow ">
        <div class="container mt-4">
            <form action="../../controllers/users/edit_user_process.controller.php" method="post">
                <?php
                $edit = getEditUser();
                echo $edit["role"];
                ?>

                <div class="d-flex justify-content-center align-items-center">
                    <h2>Edit User Form</h2>
                </div>
                <input type="hidden" name="user_id" value="<?= $edit["user_id"] ?>">
                <div class="form-group mt-3">
                    <input type="text" class="form-control" id="nameinput" aria-describedby="nameHelp" placeholder="Enter Name" name="name" value="<?= $edit["user_name"] ?>">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" id="phonenumberinput" aria-describedby="phoneHelp" placeholder="Enter Number Phone" name="phone" value="<?= $edit["phone"] ?>">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" value="<?= $edit["password"] ?>">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="<?= $edit["email"] ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="cityinput" aria-describedby="cityHelp" placeholder="Enter City" name="city" value="<?= $edit["city"] ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="countryinput" aria-describedby="countryHelp" placeholder="Enter Country" name="county" value="<?= $edit["country"] ?>">
                </div>
                <div class="form-group">
                    <select class="form-control" id="exampleFormControlSelect1" name="role">
                        <?php if ($edit["role"] = "Employee") : ?>
                            <option selected disabled>Role</option>
                            <option value="Admin">Admin</option>
                            <option value="Employee" selected>Employee</option>
                        <?php elseif ($edit["role"] = "Admin") : ?>
                            <option selected disabled>Role</option>
                            <option value="Admin" selected>Admin</option>
                            <option value="Employee">Employee</option>
                        <?php endif; ?>

                    </select>
                </div>
                <div class="d-flex justify-content-end mb-4">
                    <a href="/users" class="btn btn-danger mr-3">Cancel</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>