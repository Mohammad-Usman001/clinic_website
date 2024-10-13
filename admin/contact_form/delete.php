<?php
include("functions.php");

if(isset($_GET['id'])){
    $id=$_GET['id'];

    if (deletecontact($conn, $id)){
        header('Location: index.php');
        exit();
    }
}

?>