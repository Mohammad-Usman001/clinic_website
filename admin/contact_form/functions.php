<?php
include ("../db.php");



function addcontact($conn, $name, $email, $phone, $subject, $message){
    $stmt=$conn->prepare("INSERT INTO contactform (name, email, phone, subject, message) VALUES(?,?,?,?,?)");
    $stmt->bind_param("sssss",$name, $email, $phone, $subject, $message );
    return $stmt->execute();
}

function getAllcontact($conn) {
    $sql = "SELECT * FROM contactform ORDER BY created_at DESC";
    return $conn->query($sql);
}
function deletecontact($conn, $id) {
    $stmt = $conn->prepare("DELETE FROM contactform WHERE id = ?");
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}
function getcontactById($conn, $id) {
    $stmt = $conn->prepare("SELECT * FROM contact WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}
?>
