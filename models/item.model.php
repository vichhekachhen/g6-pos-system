<?php

function createItem(int $itemId, string $itemName, string $price, int $quantity, int $categoryId, int $userId, string $itemImage) : bool
{
    global $connection;
    $statement = $connection->prepare("insert into items (item_id, item_name, quantity, price, category_id, user_id, item_image) values (:itemId, :itemName, :price, :quantity, :categoryId, :userId, :itemImage)");
    $statement->execute([
        ':itemId' => $itemId,
        ':itemName' => $itemName,
        ':price' => $price,
        ':quantity' => $quantity,
        ':categoryId' => $categoryId,
        ':userId' => $userId,
        ':itemImage' => $itemImage

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
        $statement = $connection->prepare("SELECT * FROM items");
        $statement->execute();
        return $statement->fetchAll();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return [];
    }
}

function updateItem(string $title, string $description, int $id) : bool
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

function deleteItem(int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("delete from items where id = :id");
    $statement->execute([':id' => $id]);
    return $statement->rowCount() > 0;
}