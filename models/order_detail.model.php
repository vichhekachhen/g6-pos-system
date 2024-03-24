<?php

//add all information from tale pay_ment into table detail 
function orderDetail(int $productId, int $orderId, int $quantity): bool
{
    global $connection;
    $statement = $connection->prepare("insert into orderdetail (order_id, order_detail_quantity,item_id) values (:orderId, :quantity, :itemId)");
    $statement->execute([
        ':orderId' => $orderId,
        ':quantity' => $quantity,
        ':itemId' => $productId
    ]);

    return $statement->rowCount() > 0;
};

// Get all data from table orderDetail
function getOrderDetail(){
    global $connection;
    try{
    $statement = $connection->prepare("SELECT orderdetail.orderDetail_id,orderdetail.order_detail_quantity,orders.order_id,orders.order_date,items.item_id,items.item_name,items.price,items.item_image FROM orderdetail
    INNER JOIN orders ON orderdetail.order_id = orders.order_id
    INNER JOIN items ON orderdetail.item_id = items.item_id;
    ");
    $statement->execute();

    return $statement->fetchAll();

    } catch(PDOException $e){
        echo "Error:" .$e->getMessage();
        return []; 
    }

};

// select  data from table items
function getItemId(){
    global $connection;
    $statement = $connection->prepare("SELECT i.item_id FROM items AS i INNER JOIN orderdetail AS od ON i.item_name = od.order_detail_name");
    $statement->execute();
    
    return $statement->fetchColumn();
}

?>





