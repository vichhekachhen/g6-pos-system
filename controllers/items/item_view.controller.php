<?php
require "models/category.model.php";
$items = getCategories();
$users = getUsers();

require_once "views/items/item.view.php";

