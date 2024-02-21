<?php 
function addUser(string $name, string $password, string $email, $phone, string $city, string $country, string $role):bool{
    global $connection;
    $statement = $connection->prepare("insert into users (user_name, password, email, phone, city, country, role) values (:user_name, :password, :email, :phone, :city, :country, :role)");
    $statement->execute([
        ':user_name'=>$name,
        ':password'=>$password,
        ':email'=>$email,
        ':phone'=>$phone,
        ':city'=>$city,
        ':country'=>$country,
        ':role'=>$role,
    ]);
    return $statement->rowCount() > 0;
};

function getUser():array{
    global $connection;
    $statement = $connection->prepare("select * from users");
    $statement->execute();
    return $statement->fetchAll();
}


function viewUser(){
    global $connection;
    $statement = $connection->prepare("select * from users where user_id = :id");
    $statement->execute([
        ':id' => $_GET["id"],
    ]);

    return $statement->fetch();
}



