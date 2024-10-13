<?php
require_once 'db.php';

function getAllPosts($conn){
    $stmt=$conn->query("SELECT * FROM blog_posts ORDER BY created_at ASC");
    return $stmt->fetch_all(MYSQLI_ASSOC);
}

// function createposts($conn, $title, $short_description, $image, $content){
//     $stmt=$conn->prepare("INSERT INTO blog_posts (title, short_description, image, content) VALUE(?,?,?,?)");
//     $stmt->bind_param("ssss", $title, $short_description, $image, $content );
//     $return= $stmt->execute();
// }

?>