<!-- Begin Page Content -->
<div class="container-fluid mt-5 ">

    <!-- DataTales Example -->
    <div class="card shadow p-4">

        <form action="../../controllers/categories/insert_categories.php" method="post">

            <h3 class="text-center mb-3">Create New Category</h3>
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Category Name">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" class="form-control" placeholder="Enter Description" id="description">
            </div>
            <div class="form-row d-flex justify-content-end mt-3">
                <a href="/categories" class="btn btn-danger mr-3">Cancel</a>
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>

    </div>

</div>