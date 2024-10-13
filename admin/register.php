<?php
include('functions.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Use boolean check to handle success or failure
    if (register_user($conn, $username, $password)) { 
        header('Location: login.php');
        exit();
    } else {
        echo "Error: form could not register";
    }
}

include('header.php');
?>

<body>
    <form method="POST" action="" class="w-50 mx-auto mt-5 p-4 border rounded">
        <h2 class="text-center mb-4">Register</h2>

        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
        </div>

        <div class="text-center">
            <button type="submit" name="submit" class="btn btn-primary w-100">Register</button>
            <a href="login.php">Already have an account?</a>
        </div>
    </form>

    <!-- Bootstrap JS and Popper.js (optional for some features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
