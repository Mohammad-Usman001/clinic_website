<?php
require_once '../db.php';
require_once 'functions.php';


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    
    if (deletePost($conn, $id)) {
        header('Location: index.php');
        exit;
    } else {
        echo "Failed to delete post.";
    }
} else {
    header('Location: index.php');
    exit;
}
?>