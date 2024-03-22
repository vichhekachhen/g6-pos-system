<?php

//add to card into table pre-order
function addtoCard(string $name, int $price, int $quantity, string $image): bool
{
    global $connection;
    $statement = $connection->prepare("insert into pre_order (preOrder_name, preOrder_price, preOrder_quantity, preOrder_image) values (:name, :price, :quantity, :image)");
    $statement->execute([
        ':name' => $name,
        ':price' => $price,
        ':quantity' => $quantity,
        ':image' => $image,
    ]);

    return $statement->rowCount() > 0;
};

// display it on table pre-order
function getProductAddToCard(){
    global $connection;
    $statement = $connection->prepare("select * from pre_order");
    $statement->execute();

    return $statement->fetchAll();
};


// delete add to card from table pre-order
function deleteOrder(int $id): bool
{
    global $connection;
    $statement = $connection->prepare("delete from pre_order where preOrder_id = :id");
    $statement->execute([':id' => $id]);

    return $statement->rowCount() > 0;
}

// add more quantity in table pre-order
function addMoreQuantity (int $quantity ,int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("update pre_order set quantity = :quantity where preOrder_id = :id");
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
    $statement = $connection->prepare("SELECT COUNT(*) FROM pre_order");
    $statement->execute();
    
    return $statement->fetchColumn();
}
