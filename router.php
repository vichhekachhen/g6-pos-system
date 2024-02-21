<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$page = "";
$routes = [
    '/' => 'controllers/admin/admin.controller.php',
    '/categories' => 'controllers/categories/category.controller.php',
    '/items' => 'controllers/items/item.controller.php',
    '/orders' => 'controllers/orders/order.controller.php',
    '/reports' => 'controllers/reports/report.controller.php',
    '/users' => 'controllers/users/user.controller.php',
    '/addUsers' => 'controllers/users/add-user.controller.php',
    '/edit_users'=> 'controllers/users/edit_user.controller.php',
    '/create_category'=> 'controllers/categories/create_category.php',
    '/create_items' => 'controllers/items/create_item.controller.php',
    '/edit_category' => 'controllers/categories/edit_category.php',
    
];

if (array_key_exists($uri, $routes)) {
    $page = $routes[$uri];
} else {
    http_response_code(404);
    $page = 'views/errors/404.php';
}
require "layouts/header.php";
require "layouts/navbar.php";
require $page;
require "layouts/footer.php";
