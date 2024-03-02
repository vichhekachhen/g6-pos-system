<?php

    require_once "../../database/database.php";
    require_once "../../models/item.model.php";
 // function delete item from database
// Check if the delete button is clicked and item ID is provided
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    deleteItem($id);

    // Show a confirmation dialog using JavaScript
    echo "<script>
            if(confirm('Are you sure you want to delete this item?')) {
                window.location.href = '/items?id= deleteItem($id)';
                window.location.href = '/items'; 
            }
          </script>";
}
    // header('Location:/items');

// ?>