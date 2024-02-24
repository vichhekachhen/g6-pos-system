<!-- Begin Page Content -->
<div class="container-fluid mt-5">

  <!-- DataTales Example -->
  <div class="card shadow p-4">
    <form action="../../controllers/items/edit_item_process.controller.php" method="post" enctype="multipart/form-data">

      <div class="mb-3">
        <label for="itemName" class="form-label">ProductName</label>
        <input type="text" class="form-control" id="itemName" name="itemName" value ="<?= $item['item_name'] ?>">
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Price</label >
        <input type="text" class="form-control" id="price" name="price" value ="<?= $item['price'] ?>" >
      </div>
      <div class="mb-3">
        <label for="quantity" class="form-label">Quantity</label>
        <input type="number" class="form-control" id="quantity" name="quantity" value ="<?= $item['quantity'] ?>">
      </div>
      <div class="mb-3">
        <select class="form-control" id="categoryId" name="categoryId">
            <option value=""></option>
        </select>
      </div>
      <div class="mb-3">

        <select class="form-control" id="userId" name="userId">
          <option value="users"></option>
        </select>

      </div>
      <div class="mb-3">
        <label for="itemImage" class="form-label">ProductImage</label>
        <input type="file" class="form-control" name="itemImage" value="<?= $item['item_image'] ?>">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </div>

</div>