<?php
require '../../database/database.php';
require '../../models/user.model.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    deleteUser($id);
    echo "<script>
            if (confirm('Are you sure you want to delete this user?')){
                window.location.href = '/users?id=deleteUser($id)';
                window.location.href = '/users';
            } 
           
          </script>";
  
}else {
    header('location:/users');
}


