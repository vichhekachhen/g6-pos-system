<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow ">
        <div class="container mt-2">
            <form action="controllers/users/add_user_process.controller.php" method="post" enctype="multipart/form-data">
                
                <div class="d-flex justify-content-center align-items-center">
                    <h2>Create Employee</h2>
                </div>
                <div class="form-group">
                    <label for="userName" class="form-label">Full Name:</label>
                    <input type="text" class="form-control" id="nameinput" aria-describedby="nameHelp" placeholder="Enter Name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="phone" class="form-label">Phone Number:</label>
                    <input type="number" class="form-control" id="phonenumberinput" aria-describedby="phoneHelp" placeholder="Enter Number Phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Password: </label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" name="password">
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label for="city" class="form-label">City: </label>
                    <input type="text" class="form-control" id="city" aria-describedby="city" placeholder="Enter City" name="city">
                </div>
                <div class="form-group">
                    <label for="country" class="form-label">Country:</label>
                    <input type="text" class="form-control" id="country" aria-describedby="country" placeholder="Enter Country" name="county">
                </div>
                <div class="form-group">
                    <label for="image" class="form-label">Profil Image:</label>
                    <input type="file" class="form-control" name="image" id="Profileimage">
                </div>
                <div class="form-group">
                    <label for="role" class="form-label">Role:</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="role">
                        <option value="Employee">Employee</option>
                    </select>
                </div>
                <div class="d-flex justify-content-end mb-4">
                    <a href="/users" class="btn btn-danger mr-3">Cancel</a>
                    <button type="submit" class="btn btn-primary" id="submitBtn">Create</button>
                </div>

            </form>
        </div>
    </div>
</div>