<?php

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
        // Handle any potential database errors here
        error_log("Database error: " . $e->getMessage());
        return false;
    }
} 
// }
