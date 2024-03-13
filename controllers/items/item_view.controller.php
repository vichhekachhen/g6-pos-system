<?php
require "models/category.model.php";
$items = getCategories();

require_once "views/items/item.view.php";

