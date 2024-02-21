<?php
function addUser(string $name, string $password, string $email, int $phone, string $city, string $country, string $role): bool
{
    global $connection;
    $statement = $connection->prepare("insert into users (user_name, password, email, phone, city, country, role) values (:user_name, :password, :email, :phone, :city, :country, :role)");
    $statement->execute([
        ':user_name' => $name,
        ':password' => $password,
        ':email' => $email,
        ':phone' => $phone,
        ':city' => $city,
        ':country' => $country,
        ':role' => $role,
    ]);
    return $statement->rowCount() > 0;
};

function getUser(): array
{
    global $connection;
    $statement = $connection->prepare("select * from users");
    $statement->execute();
    return $statement->fetchAll();
}

// delete-user===============================
function deleteUser(int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("delete from users where user_id = :id");
    $statement->execute([':id' => $id]);
    
    return $statement->rowCount() > 0;
}




function editUser(int $id, string $name, string $password, string $email, int $phone, string $city, string $country, string $role)
{
    global $connection;
    $statement= $connection->prepare("update users set user_name= :user_name, password= :password, email= :email, phone= :phone, city= :city, country= :country, role= :role where user_id= :id");
    $statement->execute([
        ':id'=>$id,
        ':user_name' => $name,
        ':password' => $password,
        ':email' => $email,
        ':phone' => $phone,
        ':city' => $city,
        ':country' => $country,
        ':role' => $role,
    ]);
    return $statement->rowCount() >0;
}
function    getEditUser(){
    global $connection;
    $statment = $connection->prepare("SELECT * FROM users WHERE user_id=:id");
    $statment->execute([
        ":id" => $_GET["id"],
    ]);
    return $statment->fetch();
    // return $edits->rowCount() >0;
}
