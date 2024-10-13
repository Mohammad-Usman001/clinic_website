<?php
include ('functions.php');

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];


    echo "Name: $name, Email: $email, Phone: $phone, Subject: $subject, Message: $message";


    if (addcontact($conn, $name, $email, $phone, $subject, $message)){
        header('Location: index.php');
        exit();
    }
}


?>
