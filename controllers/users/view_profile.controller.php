<?php

require_once "../../database/database.php";
require_once "../../models/user.model.php";

// Process for veiw User
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $name = $_POST["name"];
  $phone = $_POST["phone"];
  $password = $_POST["password"];
  $email = $_POST["email"];
  $city = $_POST["city"];
  $country = $_POST["county"];
  $role = $_POST["role"];
  $isView = viewUser($name, $password, $email, $phone, $city, $country, $role);
  
}




