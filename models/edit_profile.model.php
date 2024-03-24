<?php

// function edit image by id from image that you want to edit
function editImage($id, $image)
{
    global $connection;
    try {
        $statement = $connection->prepare("UPDATE users SET  profile_image = :profile_image WHERE user_id = :id");
        $statement->execute([
            ':id' => $id,
            ':profile_image' => $image
        ]);

        return $statement->rowCount() > 0;

    } catch (PDOException $e) {
        error_log("Database error: " . $e->getMessage());
        
        return false;
    }
} 
