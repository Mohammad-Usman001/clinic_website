<?php
include 'functions.php';

// session_start();

if (isset($_POST['update'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];  // Get the id from the form

    // Pass the id to the updateenquiry function
    if (updateuser($conn, $username, $password, $id)) {
        // $_SESSION['success'] = "Form updated successfully!"; 
        header("Location: enquiry_list.php");
        exit();  // Important to stop further script execution after redirection
    } else {
        echo "Error updating the record.";
    }
}