<?php
require_once 'layout_dashboard.php';
?>
<?php
require_once 'db.php';
require_once 'functions.php';

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$user = fetchUser($conn, $_SESSION['user_id']);

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username)) {
        $error = "Username cannot be empty.";
    } elseif (!empty($password) && strlen($password) < 8) {
        $error = "Password must be at least 8 characters long.";
    } else {
        if (updateUser($conn, $_SESSION['user_id'], $username, $password)) {
            $success = "Profile updated successfully!";
            $user = fetchUser($conn, $_SESSION['user_id']); // Refresh user data
        } else {
            $error = "Failed to update profile.";
        }
    }
}

?>


<div id="content" class="content">

<div class="container-fluid">
<h2>Edit Profile</h2>
        <?php
        if ($error) echo "<div class='alert alert-danger'>$error</div>";
        if ($success) echo "<div class='alert alert-success'>$success</div>";
        ?>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="<?php echo htmlspecialchars($user['username']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">New Password (leave blank to keep current)</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Update Profile</button>
            <a href="dashboard.php" class="btn btn-secondary">Back to Dashboard</a>
        </form>
    </div>
</div>
    <?php
require_once 'layout_footer.php';
?>