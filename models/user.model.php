<?php

// add more users
function addUser(string $name, string $password, string $email, int $phone, string $city, string $country, string $image, string $role): bool
{
    global $connection;
    $statement = $connection->prepare("insert into users (user_name, password, email, phone, city, country, profile_image, role) values (:user_name, :password, :email, :phone, :city, :country, :profile_image, :role)");
    $statement->execute([
        ':user_name' => $name,
        ':password' => $password,
        ':email' => $email,
        ':phone' => $phone,
        ':city' => $city,
        ':country' => $country,
        ':profile_image' => $image,
        ':role' => $role,
    ]);
    return $statement->rowCount() > 0;
};

// get data from table users
function getUsers(): array
{
    global $connection;
    $statement = $connection->prepare("select * from users ORDER BY user_id DESC ");
    $statement->execute();
    return $statement->fetchAll();
}

// delete users
function deleteUser(int $id): bool
{
    global $connection;
    $statement = $connection->prepare("delete from users where user_id = :id");
    $statement->execute([':id' => $id]);

    return $statement->rowCount() > 0;
}

// editusers
function editUser(int $id, string $name, string $password, string $email, int $phone, string $city, string $country,  string $role)
{
    global $connection;
    $statement = $connection->prepare("update users set user_name= :user_name, password= :password, email= :email, phone= :phone, city= :city, country= :country, role= :role where user_id= :id");
    $statement->execute([
        ':id' => $id,
        ':user_name' => $name,
        ':password' => $password,
        ':email' => $email,
        ':phone' => $phone,
        ':city' => $city,
        ':country' => $country,
        ':role' => $role
    ]);
    return $statement->rowCount() > 0;
}
// Get data to edit user
function getEditUser()
{
    global $connection;
    $statment = $connection->prepare("SELECT * FROM users WHERE user_id=:id");
    $statment->execute([
        ":id" => $_GET["id"],
    ]);
    return $statment->fetch();
}
 

function viewUser()
{
    global $connection;
    $statement = $connection->prepare("select * from users where user_id = :id");
    $statement->execute([
        ':id' => $_GET["id"],
    ]);

    return $statement->fetch();
}

//totaluser 
function totalUsers(): int
{
    global $connection;
    $statement = $connection->prepare("SELECT COUNT(*) FROM users");
    $statement->execute();
    return $statement->fetchColumn();
}

function getUser(string $email): array
{
    global $connection;
    $statement = $connection->prepare("select * from users where email = :email");
    $statement->execute([':email' => $email]);
    if ($statement->rowCount() > 0) {
        return $statement->fetch();
    } else {
        return [];
    }
}

