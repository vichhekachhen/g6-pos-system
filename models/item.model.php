<?php

// function to insert value into item table
function createItem(string $itemName, int $price, int $quantity, int $categoryId, int $userId, string $imgProfile): bool
{
    global $connection;
    $statement = $connection->prepare("INSERT INTO items (item_name, quantity, price, category_id, user_id, item_image) VALUES (:item_name, :quantity, :price, :category_id, :user_id, :item_image)");
    $statement->execute([
        ':item_name' => $itemName,
        ':quantity' => $quantity,
        ':price' => $price,
        ':category_id' => $categoryId,
        ':user_id' => $userId,
        ':item_image' => $imgProfile
    ]);

    return $statement->rowCount() > 0;
}

// Get all data from items
function getAllItems(): array{
    global $connection;
    $statement = $connection->prepare("select * from items");
    $statement->execute();

    return $statement->fetchAll();
}

// function selete Id from items table
function getItem(int $id): array
{
    global $connection;
    try {
        $statement = $connection->prepare("SELECT * FROM items WHERE item_id = :id");
        $statement->execute([':id' => $id]);

        return $statement->fetch();

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();

        return [];
    }
}

// Get all items from the database have inner join
function getItems(): array
{
    global $connection;
    try {
        $statement = $connection->prepare("SELECT items.item_id, items.item_name, items.quantity, items.price, items.item_image, categories.category_name, users.user_name
        FROM items
        INNER JOIN categories ON items.category_id = categories.category_id
        INNER JOIN users ON items.user_id = users.user_id ORDER BY items.item_id DESC;
        ");
        $statement->execute();

        return $statement->fetchAll();

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        
        return [];
    }
}

// function selete id to edit
function getEditItem() : bool {
    global $connection;
    $statment = $connection->prepare("SELECT * FROM items WHERE item_id = :id");
    $statment->execute([
        ":id" => $_GET["id"],
    ]);

    return $statment->fetch() > 0;
}

// function update value in table items (without edit id)
function updateItem(string $itemName, string $quantity, $price, string $itemImage, int $id): bool
{
    global $connection;
    $statement = $connection->prepare("UPDATE items set item_name = :itemName, quantity = :quantity, price = :price, item_image = :itemImage WHERE item_id = :item_id");
    $statement->execute([
        ':itemName' => $itemName,
        ':quantity' => $quantity,
        ':price' => $price,
        ':itemImage' => $itemImage,
        ':item_id' => $id
    ]);

    return $statement->rowCount() > 0;
}

// function deleteImageInFolder from folder assets
function deleteImageInFolder($image) {
    $path_file = "../../assets/items_img/". $image;
    if (file_exists($path_file)) {
        unlink($path_file);
    }
}

// function deleted images from items table best on Id
function deleteItem(int $id)
{
    $image_to_delete = getItem($id)['item_image'];
    deleteImageInFolder($image_to_delete);

    global $connection;
    $statement = $connection->prepare("delete from items where item_id = :id");
    $statement->execute([':id' => $id]);

    return $statement->rowCount() > 0;
}

// //Check item image
function checkItemImage($image): bool
{
    //file upload directory
    $target_dir = "../../assets/items_img/";
    $file_name = basename($image["name"]);
    $target_file_path = $target_dir . $file_name;
    $file_type = pathinfo($target_file_path, PATHINFO_EXTENSION);
    $file_allow_type = array("jpg", "png", "jpeg", "gif", "bmp");
    $file_size = $image['size'];
    
    return (
        $file_size < 500000 &&
        !file_exists($target_file_path) &&
        in_array($file_type, $file_allow_type)
    );
}

// //add image to folder
function addImageToFolder($image)
{
    //file upload directory
    $target_dir = "../../assets/items_img/";

    // Check if the directory doesn't exist
    $file_name = basename($image["name"]);
    $target_file_path = $target_dir . $file_name;

    move_uploaded_file($image["tmp_name"], $target_file_path);
}

// count totalproducts
function totalProducts(): int
{
    global $connection;
    $statement = $connection->prepare("SELECT COUNT(*) FROM items");
    $statement->execute();

    return $statement->fetchColumn();
}

function somQuantity(){
    global $connection;
    $statement = $connection->prepare("SELECT SUM(quantity) AS total_quantity FROM items");
    $statement->execute();

    return $statement->fetchColumn();
}

// sum totalproucts
function totalQtyProducts(): int
{
    global $connection;
    $statement = $connection->prepare("SELECT SUM(quantity) FROM items");
    $statement->execute();

    return $statement->fetchColumn();
}