<?php

require_once "../../database/database.php";
require_once "../../models/category.model.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    $id=$_POST['id'];
    $categoryName = $_POST['categoryName'];
    $description = $_POST['description'];
  
    $isEdited =  editcategory($categoryName, $description,$id);
  
    if ($isEdited) {
      header('Location: /categories');
    }
    else {
      header('Location: /categories');
  };

  }


