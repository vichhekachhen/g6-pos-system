<!-- Begin Page Content -->
<div class="container-fluid mt-5">

  <!-- DataTales Example -->
  <div class="card shadow p-4">

    <form action="../../controllers/items/insert_item.controller.php" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="itemName" class="form-label">ProductName</label>
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
        <select class="form-control" id="categoryId" name="categoryId">

          <option selected>Select ID</option>
          <?php
          foreach ($items as $item) { ?>
          <option value="<?=$item['category_id']?>"><?=$item['category_name']?></option>
          <?php } ?>
        </select>


      </div>
      <div class="mb-3"> 

             <select class="form-control" id="userId" name="userId">
              <option selected>Select ID</option>
              <?php
              foreach ($users as $user) {?>
              <option value="<?=$user['user_id']?>"><?=$user['user_name']?></option>
              <?php }?>
            </select>

      </div> 
      <div class="mb-3">
        <label for="itemImage" class="form-label">ProductImage</label>
        <input type="file" class="form-control" name="itemImage">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </div>

</div>