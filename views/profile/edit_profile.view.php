<div class="container-fluid">
    
    <?php
    $username  =  $_SESSION["user_name"];
    $Email = $_SESSION["email"];
    $Role  =  $_SESSION["role"];
    $password = $_SESSION["password"];
    $phone = $_SESSION["phone"];
    $City = $_SESSION["city"];
    $Country = $_SESSION["country"];
    $Profile = $_SESSION["profile_image"];
    $iduser = $_SESSION["user_id"];

    ?>

    <div class="card shadow ">
        <div class="container mt-4">
            <form action="../../controllers/profile/edit_profile_process.controller.php" method="post" enctype="multipart/form-data">
                <input type="text" name="role" value="amind" hidden>
                <div class="d-flex justify-content-center align-items-center">
                    <h2>Edit User Form</h2>
                </div>
                <input type="hidden" name="user_id" value="<?= $edit["user_id"] ?>">
                <div class="form-group mt-3">
                    <label for="nameinput">UserName</label>
                    <input type="text" class="form-control" id="nameinput" aria-describedby="nameHelp" placeholder="Enter Name" name="name" value=" <?= $username ?>">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="number" class="form-control" id="phone" aria-describedby="phone" placeholder="Enter Number Phone" name="phone" value="<?= $phone ?>">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="Password" placeholder="Password" name="password" value="<? $Profile ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter email" name="email" value="<?= $Email ?>">
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" aria-describedby="city" placeholder="Enter City" name="city" value="<?= $City ?>">
                </div>
                <div class="form-group">
                    <label for="country">Country</label>
                    <input type="text" class="form-control" id="countryinput" aria-describedby="country" placeholder="Enter Country" name="county" value="<?= $Country ?>">
                </div>
                <div class="form-group">
                    <label for="image" class="form-label">Profil Image:</label>
                    <input type="text" name="old" value="<?= $Profile ?>">
                    <input type="file" class="form-control" name="image" id="Profileimage" value="<?= $Profile ?>">
                </div>
                <div class="d-flex justify-content-end mb-4">
                    <a href="/view_profile" class="btn btn-danger mr-3">Cancel</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>