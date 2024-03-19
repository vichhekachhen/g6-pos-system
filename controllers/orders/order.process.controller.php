<?php
require_once "../../database/database.php";

// Rest of your code
if (isset($_POST["checkout"])) {
    function orders(){
        global $connection;
        $statement = $connection->prepare("select * from orders");
        $statement->execute();
        return $statement->fetchAll();
    };
    $Rith = orders();
    return orders();
    print_r($Rith);
}

?>