<!-- Begin Page Content -->
<div class="container-fluid mt-5">

  <!-- DataTales Example -->
  <div class="card shadow p-4">

    <form action="../../controllers/items/insert_item.controller.php" method="post">
      <div class="mb-3">
        <label for="itemId" class="form-label">Item ID</label>
        <input type="text" class="form-control" id="itemId" name="itemId">
      </div>
      <div class="mb-3">
        <label for="itemName" class="form-label">Item Name</label>
        <input type="text" class="form-control" id="itemName" name="itemName">
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" id="price" name="price">
      </div>
      <div class="mb-3">
        <label for="quantity" class="form-label">Quantity</label>
        <input type="number" class="form-control" id="quantity" name="quantity">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlSelect1">category ID</label>
        <select class="form-control" id="exampleFormControlSelect1">
          <option value="">Category Name</option>
          
        </select>
      </div>
      <div class="mb-3">
      <select class="form-control" id="exampleFormControlSelect1">
          <option value="">user Name</option>
          
        </select>
      </div>
      <div class="mb-3">
        <label for="itemImage" class="form-label">Item Image</label>
        <input type="file" class="form-control" id="itemImage" name="itemImage">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </div>

</div>