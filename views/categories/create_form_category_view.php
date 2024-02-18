<!-- Begin Page Content -->
<div class="container-fluid mt-5 ">

    <!-- DataTales Example -->
    <div class="card shadow p-4">

        <form action="../../controllers/categories/insert_categories.php" method="post">
            <div class="form-group">
                <label for="id">Category ID</label>
                <input type="number" name="id" class="form-control" placeholder="id" id="id">
            </div>

            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" name="name" class="form-control" placeholder="name">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

</div>