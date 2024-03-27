<?php 
// check the customer is payment or not
function isPayment(): array
{
    global $connection;
    $statement = $connection->prepare("select * from ispayment");
    $statement->execute();

    return $statement->fetchAll();
};


function isPaying() {
    global $connection;
    $statement = $connection->prepare("SELECT action FROM ispayment ORDER BY isPayment_id DESC LIMIT 1");
    $statement->execute();
    
    return $statement->fetchColumn();
};


function isPayingLastId() {
    global $connection;
    $statement = $connection->prepare("SELECT isPayment_id FROM ispayment ORDER BY isPayment_id DESC LIMIT 1");
    $statement->execute();
    
    return $statement->fetchColumn();
}

// Add the customer that they want to make payment
function addPayment(string $action): bool
{
    global $connection;
    $statement = $connection->prepare("insert into ispayment (action) values (:action)");
    $statement->execute([
        ':action' => $action,
    ]);

    return $statement->rowCount() > 0;
};

// If the customer is pay already
function ispayAlready ($theAction , $isPayId) : bool
{
    global $connection;
    $statement = $connection->prepare("update ispayment set action = :action where isPayment_id = :isPayment_id");
    $statement->execute([
        ':isPayment_id'=>$isPayId,
        ':action'=>$theAction,
        
    ]);

    return $statement->rowCount() > 0;
}

function deleteIsPay()
{
    global $connection;
    $statement = $connection->prepare("DELETE FROM ispayment");
    $statement->execute();

    return $statement->rowCount() > 0;
}


?>