<!-- Begin Page Content -->
<div class="container-fluid mt-5">

  <!-- DataTales Example -->
  <div class="card shadow p-4">
    <?php require_once "models/category.model.php" ?>
    <?php require_once "models/user.model.php" ?>

    <form action="../../controllers/items/edit_item_process.controller.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="item_id" value="<?= $_GET["id"] ?>">
      <div class="mb-3">
        <label for="itemName" class="form-label">ProductName</label>
        <input type="text" class="form-control" id="itemName" name="itemName" value="<?= $item['item_name'] ?>">
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" id="price" name="price" value="<?= $item['price'] ?>">
      </div>
      <div class="mb-3">
        <label for="quantity" class="form-label">Quantity</label>
        <input type="number" class="form-control" id="quantity" name="quantity" value="<?= $item['quantity'] ?>">
      </div>

      <div class="mb-3">

        <select class="form-control" id="categoryId" name="categoryId">
          <?php

          $categories = getCategories();
          var_dump($categories);
          if ($categories) {

            foreach ($categories as $category) {

              echo "<option value='" . $category['category_id'] . "'";


              if ($category['category_id']  == $item['category_id']) {
                echo " selected";
              }

              echo ">" . $category['category_name'] . "</option>";
            }
          } else {
            echo "<option value=''>No categories found</option>";
          }
          ?>
        </select>
      </div>

      <div class="mb-3">

        <select class="form-control" id="userId" name="userId">
          <?php
          $users = getUser();

          if ($users) {
            foreach ($users as $user) {
              echo "<option value='" . $user['user_id'] . "'";

              if ($user['user_id'] == $item['user_id']) {

                echo "selected";
              }
              echo ">" . $user['user_name'] . "</option>";
            }
          } else {
            echo "<option value=''>No users found</option>";
          }
          ?>
        </select>

      </div>
     
    <div class="mb-3">
        <label for="itemImage" class="form-label">Product Image</label>
        <input type="text" name="old" value="<?= $item['item_image']?>">
        <input type="file" class="form-control" name="itemImage" value="<?= $item['item_image']?>">
    </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </div>

</div>