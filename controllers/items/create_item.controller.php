<?php
require "database/database.php";
require "models/category.model.php";
require "models/user.model.php";
$items = getCategories();
$users = getUsers();

require_once "views/items/form_create.view.php";

