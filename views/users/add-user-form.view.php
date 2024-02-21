<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow ">
        <div class="container mt-4">
            <form action="controllers/users/add_user_process.controller.php" method="post">
                <div class="d-flex justify-content-center align-items-center">
                    <h2>Add User Form</h2>
                </div>
                <div class="form-group mt-3">
                    <input type="text" class="form-control" id="nameinput" aria-describedby="nameHelp" placeholder="Enter Name" name="name">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" id="phonenumberinput" aria-describedby="phoneHelp" placeholder="Enter Number Phone" name="phone">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="cityinput" aria-describedby="cityHelp" placeholder="Enter City" name="city">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="countryinput" aria-describedby="countryHelp" placeholder="Enter Country" name="county">
                </div>
                <div class="form-group">
                    <select class="form-control" id="exampleFormControlSelect1" name="role">
                        <option selected disabled>Role</option>
                        <option value="Admin">Admin</option>
                        <option value="Employee">Employee</option>
                    </select>
                </div>

                <div class="d-flex justify-content-end mb-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>