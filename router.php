<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$page = "";
$routes = [
    '/admin' => 'controllers/admin/admin.controller.php', // this line will change code;
    '/categories' => 'controllers/categories/category.controller.php',
    '/items' => 'controllers/items/item.controller.php',
    '/editItem' => 'controllers/items/edit_item.controller.php',
    '/orders' => 'controllers/orders/order.controller.php',
    '/reports' => 'controllers/reports/report.controller.php',
    '/users' => 'controllers/users/user.controller.php',
    '/addUsers' => 'controllers/users/add-user.controller.php',
    '/edit_users'=> 'controllers/users/edit_user.controller.php',
    '/create_category'=> 'controllers/categories/create_category.php',
    '/create_items' => 'controllers/items/create_item.controller.php',
    '/edit_category' => 'controllers/categories/edit_category.php',
    '/viewUser' => 'controllers/users/view.user.controller.php',
    
];
$aminRoute =[
    '/admin' => 'controllers/admin/admin.controller.php', // this line will change code;
    '/categories' => 'controllers/categories/category.controller.php',
    '/items' => 'controllers/items/item.controller.php',
    '/editItem' => 'controllers/items/edit_item.controller.php',
    '/reports' => 'controllers/reports/report.controller.php',
    '/users' => 'controllers/users/user.controller.php',
    '/addUsers' => 'controllers/users/add-user.controller.php',
    '/edit_users'=> 'controllers/users/edit_user.controller.php',
    '/create_category'=> 'controllers/categories/create_category.php',
    '/create_items' => 'controllers/items/create_item.controller.php',
    '/edit_category' => 'controllers/categories/edit_category.php',
    '/viewUser' => 'controllers/users/view.user.controller.php',
    '/logout' => 'controllers/admin/logout.controller.php'
];
if (array_key_exists($uri, $aminRoute)) {
    $page = $routes[$uri];
}


if (array_key_exists($uri, $routes)) {
    $page = $routes[$uri];
} else {
    http_response_code(404);
    $page = 'views/errors/404.php';
}
if ($uri == '/sigin') {
    $page = 'views/signin/signin_form.view.php';
    require "views/signin/signin_form.view.php";
    require "layouts/header.php";
    
} elseif ($uri=="/viewUser") {
    require "layouts/header.php";
    require "views/users/user_pf.view.php";
   
} 
require "layouts/header.php";
require "layouts/navbar.php";
require $page;
require "layouts/footer.php";

