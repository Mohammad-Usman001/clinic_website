<?php
// functions.php

// Include the database connection file
include('db.php');

// functions.php
function fetchUser($conn, $id) {
    $stmt = $conn->prepare("SELECT id, username FROM users WHERE id = ?");
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}

function updateUser($conn, $id, $username, $password) {
    $stmt = $conn->prepare("UPDATE users SET username = ?, password = ? WHERE id = ?");
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $stmt->bind_param('ssi', $username, $hashed_password, $id);
    return $stmt->execute();
}


// Register User function
function register_user($conn, $username, $password) {
    try {
        // Hash the password
        $password_hashed = password_hash($password, PASSWORD_BCRYPT);

        // Prepare the SQL query
        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param('ss', $username, $password_hashed);
        return $stmt->execute();
        // Execute the query
        // if ($stmt->execute()) {
        //     return true; // User successfully registered
        // }

    } catch (mysqli_sql_exception $e) {
        // Check if the error is due to a duplicate entry
        if ($e->getCode() == 1062) { // MySQL error code for duplicate entry
            echo "Error: Username already exists. Please choose a different username.";
        } else {
            // Other SQL errors can be handled here
            echo "An error occurred: " . $e->getMessage();
            
        }
        return false; // Registration failed
    }
}

// Authenticate User function
function authenticate_user($conn, $username, $password) {
    // Prepare the SQL query to fetch the user data
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars($conn->error));
    }
    
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $id = $user['id'];
        $hashed_password = $user['password'];
        
        // Verify the entered password with the hashed password from the database
        if (password_verify($password, $hashed_password)) {
            // Return user data on successful authentication
            $stmt->close();
            return ['id' => $id, 'username' => $username];
        }
    }
    
    $stmt->close();
    return false; // Invalid credentials or username not found
}
// function authenticate_user($conn, $username, $password) {
//     // Prepare and execute the query to fetch user data
//     $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
//     $stmt->bind_param('s', $username);
//     $stmt->execute();
//     $result = $stmt->get_result();
    
//     // If the user exists
//     if ($result->num_rows > 0) {
//         $user = $result->fetch_assoc();
        
//         // Verify the password
//         if (password_verify($password, $user['password'])) {
//             return ['id' => $user['id'], 'username' => $username]; // Return user data if password matches
//         }
//     }
    
//     return false; // Return false if authentication fails
// }

?>
