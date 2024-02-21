<?php

//create category
function createCategory(int $categoryId, string $categoryName): bool
{
    global $connection;
    $statement = $connection->prepare("insert into categories (category_id, category_name) values (:categoryId, :categoryName)");
    $statement->execute([
        ':categoryId' => $categoryId,
        ':categoryName' => $categoryName
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

function updateCatgory(string $title, string $description, int $id): bool
{
    global $connection;
    $statement = $connection->prepare("update categories set category_id = :id, category_name = :name where category_id = :id");
    $statement->execute([
        ':id' => $title,
        ':name' => $description,
        ':id' => $id

    ]);

    return $statement->rowCount() > 0;
}

function deleteCategory(int $id): bool
{
    global $connection;
    $statement = $connection->prepare("delete from categories where category_id = :id");
    $statement->execute([':id' => $id]);

    return $statement->rowCount() > 0;
}

// Define an array of categories
 global $connection ;

// Function to search for a category
function searchCategory($query,$connection) {
    $matches = array();
    foreach ($connection as $conn ) {
        // Check if the query matches the category (case-insensitive)
        if (stripos($conn, $query) !== false) {
            $matches[] = $conn;
        }
    }
    return $matches;
}

// Example usage
// $query = "search";
// $searchResults = searchCategory($query, $connection);

// Display search results
// if (!empty($searchResults)) {
//     echo "Search results for '$query':<br>";
//     foreach ($searchResults as $result) {
//         echo "- $result<br>";
//     }
// } else {
//     echo "No results found for '$query'.";
// }


