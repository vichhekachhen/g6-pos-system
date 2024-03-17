<?php


//add to card
function orders(string $name, int $price, int $quantity, string $image): bool
{
    global $connection;
    $statement = $connection->prepare("insert into orders (name, price, quantity, image) values (:name, :price, :quantity, :image)");
    $statement->execute([
        ':name' => $name,
        ':price' => $price,
        ':quantity' => $quantity,
        ':image' => $image,
    ]);
    return $statement->rowCount() > 0;
};

// display it on table
function getProductAddToCard(){
    global $connection;
    $statement = $connection->prepare("select * from orders");
    $statement->execute();
    return $statement->fetchAll();
};


// add more quantity
function addMoreQuantity (int $quantity ,int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("update orders set quantity = :quantity where id = :id");
    $statement->execute([
        ':quantity' => $quantity,
        ':id' => $id
    ]);

    return $statement->rowCount() > 0;
}


// count quantity order
function totalAddToCards(): int
{
    global $connection;
    $statement = $connection->prepare("SELECT COUNT(*) FROM orders");
    $statement->execute();
    return $statement->fetchColumn();
}
