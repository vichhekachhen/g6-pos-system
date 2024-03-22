<?php
require_once 'database/database.php';
require "models/category.model.php";

$id =  $_GET['id'];
$cat = getCategory($id);
?>
<!-- Begin Page Content -->
<div class="container mt-5 ">

  <!-- DataTales Example -->
  <div class="card shadow p-4">

    <form action="controllers/categories/edit_category.controller.php" method="post">
      <div class="d-flex justify-content-center align-items-center">
        <h2>Edit Category</h2>
      </div>
      <input type="hidden" value="<?= $cat['category_id'] ?>" name="id">
      <div class="form-group">
        <label for="categoryName">Category Name:</label>
        <input type="text" name="categoryName" value="<?= $cat['category_name'] ?>" class="form-control" placeholder="Enter email" id="categoryName">
      </div>

      <div class="form-group">
        <label for="desc">Description</label>
        <textarea name="description" id="description" class="form-control"><?= $cat['description'] ?></textarea>
      </div>
      <div class="form-row d-flex justify-content-end mt-3">
        <a href="/categories" class="btn btn-danger mr-3">Cancel</a>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
  </div>
</div>
<?php
