<?php

function createItem(string $itemName, string $price, int $quantity, int $categoryId, int $userId, $imgProfile): bool
{
    global $connection;
    $statement = $connection->prepare("insert into items (item_name, quantity, price, category_id, user_id) values (:itemId, :itemName, :quantity, :price, :categoryId, :userId, :itemImage)");
    $statement->execute([
        ':itemName' => $itemName,
        ':quantity' => $quantity,
        ':price' => $price,
        ':categoryId' => $categoryId,
        ':userId' => $userId,
        ':itemImage' => $imgProfile

    ]);

    return $statement->rowCount() > 0;
}





function getItem(int $id): array
{
    global $connection;

    try {
        $statement = $connection->prepare("SELECT * FROM items WHERE id = :id");
        $statement->execute([':id' => $id]);
        return $statement->fetch();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();

        return [];
    }
}

// Get all items from the database
function getItems(): array
{
    global $connection;
    try {
        $statement = $connection->prepare("SELECT items.item_id, items.item_name, items.quantity, items.price, items.item_image, categories.category_id, users.user_id 
        FROM items
        INNER JOIN categories ON items.category_id = categories.category_id
        INNER JOIN users ON items.user_id = users.user_id;
        ");
        $statement->execute();
        return $statement->fetchAll();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();

        return [];
    }
}

function updateItem(string $title, string $description, int $id): bool
{
    global $connection;
    $statement = $connection->prepare("update items set title = :title, description = :description where id = :id");
    $statement->execute([
        ':title' => $title,
        ':description' => $description,
        ':id' => $id

    ]);

    return $statement->rowCount() > 0;
}

function deleteItem(int $id): bool
{
    global $connection;
    $statement = $connection->prepare("delete from items where item_id = :id");
    $statement->execute([':id' => $id]);

    return $statement->rowCount() > 0;
}

// //Check item image

function checkItemImage($image): bool
{

    //file upload directory
    $target_dir = "assets/items_img/";
    $file_name = basename($image["name"]);
    $target_file_path = $target_dir . $file_name;
    $file_type = pathinfo($target_file_path, PATHINFO_EXTENSION);
    $file_allow_type = array("jpg", "png", "jpeg");
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
    //File upload directory
    $targetFilePath = "assets/items_img/".$image['name'];

    move_uploaded_file($image['tmp_name'], $targetFilePath);
}
