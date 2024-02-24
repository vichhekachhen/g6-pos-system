<?php

require "database/database.php";
require "models/item.model.php";
$item = getItem($_GET["id"]);


require "views/items/edit_item.view.php";

