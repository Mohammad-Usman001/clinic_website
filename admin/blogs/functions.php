<?php
include '../db.php';

function createPost($conn, $title, $short_description, $image, $content, $slug) {
    $stmt = $conn->prepare("INSERT INTO blog_posts (title, short_description, image, content, slug) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $title, $short_description, $image, $content, $slug);
    return $stmt->execute();
}

function getAllPosts($conn) {
    $sql = "SELECT * FROM blog_posts ORDER BY created_at DESC";
    return $conn->query($sql);
}

function getPostById($conn, $id) {
    $stmt = $conn->prepare("SELECT * FROM blog_posts WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}
function getPostBySlug($conn, $slug) {
    $stmt = $conn->prepare("SELECT * FROM blog_posts WHERE slug = ?");
    $stmt->bind_param("s", $slug);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}

function updatePost($conn, $id, $title, $short_description, $image, $content) {
    $stmt = $conn->prepare("UPDATE blog_posts SET title = ?, short_description = ?, image = ?, content = ? WHERE id = ?");
    $stmt->bind_param("ssssi", $title, $short_description, $image, $content, $id);
    return $stmt->execute();
}

function deletePost($conn, $id) {
    $stmt = $conn->prepare("DELETE FROM blog_posts WHERE id = ?");
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}

function createSlug($string) {
    $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string)));
    return $slug;
}
?>