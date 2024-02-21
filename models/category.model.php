<?php

//create category
function createCategory( string $categoryName, string $description): bool
{
    global $connection;
    $statement = $connection->prepare("insert into categories (category_name, description) values (:category_name, :description)");
    $statement->execute([
        ':category_name' => $categoryName,
        ':description' => $description
    ]);

    return $statement->rowCount() > 0;
}


function getCategory(int $id): array
{
    global $connection;
    $statement = $connection->prepare("select * from categories where category_id = :id");
    $statement->execute([':id' => $id]);

    return $statement->fetch();
}


function getCategories(): array
{
    global $connection;
    $statement = $connection->prepare("select * from categories");
    $statement->execute();
    return $statement->fetchAll();
}


function deleteCategory(int $id): bool
{
    global $connection;
    $statement = $connection->prepare("delete from categories where category_id = :id");
    $statement->execute([':id' => $id]);

    return $statement->rowCount() > 0;
}


function editcategory (string $categoryName, string $description, int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("update categories set category_name = :categoryName, description = :description where category_id = :category_id");
    $statement->execute([
        ':categoryName' => $categoryName,
        ':description' => $description,
        ':category_id' => $id

    ]);

    return $statement->rowCount() > 0;
}


