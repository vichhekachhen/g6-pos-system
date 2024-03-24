<?php
// Clear data from table pay_ment;
function deleteDataPayMent()
{
    global $connection;
    $statement = $connection->prepare("DELETE FROM pay_ment");
    $statement->execute();

    return $statement->rowCount() > 0;
}

//add to card into table pre-order
function orders(string $date): bool
{
    global $connection;
    $statement = $connection->prepare("insert into orders (order_date) values (:date)");
    $statement->execute([
        ':date' => $date,
    ]);

    return $statement->rowCount() > 0;
};

// function to get the last order_id from the orders table
function getLastOrderId() {
    global $connection;
    $statement = $connection->prepare("SELECT order_id FROM orders ORDER BY order_id DESC LIMIT 1");
    $statement->execute();
    
    return $statement->fetchColumn();
}

function countOrder()
{
    global $connection;
    $statement = $connection->prepare("SELECT COUNT(*) FROM orders");
    $statement->execute();

    return $statement->fetchColumn();
}
