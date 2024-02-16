<!-- Begin Page Content -->
<div class="container-fluid mt-5 ">

    <!-- DataTales Example -->
    <div class="card shadow p-4">

        <form action="../../controllers/categories/insert_categories.php" method="post">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control" placeholder="Enter title" id="title">
            </div>

            <div class="form-group">
                <label for="desc">Description</label>
                <textarea name="description" id="desc" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

</div>