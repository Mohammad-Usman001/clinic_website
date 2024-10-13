<?php

require_once '../db.php';
require_once 'functions.php';

if (!isset($_GET['id'])) {
    header('Location: index.php');
    exit;
}

$post = getPostById($conn, $_GET['id']);

if (!$post) {
    header('Location: index.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $short_description = $_POST['short_description'];
    $content = $_POST['content'];
    
    // Handle image upload
    $image = $post['image']; // Keep the existing image by default
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $upload_dir = __DIR__ . '/uploads/'; // Use absolute path
        
        // Create the uploads directory if it doesn't exist
        if (!file_exists($upload_dir)) {
            if (!mkdir($upload_dir, 0755, true)) {
                $error = "Failed to create uploads directory.";
            }
        }
        
        if (!isset($error)) {
            $file_extension = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
            $allowed_extensions = array('jpg', 'jpeg', 'png', 'gif');
            
            if (in_array($file_extension, $allowed_extensions)) {
                $new_file_name = uniqid() . '.' . $file_extension;
                $new_file_path = $upload_dir . $new_file_name;
                
                if (move_uploaded_file($_FILES['image']['tmp_name'], $new_file_path)) {
                    // Delete the old image if it exists and is different from the default
                    if ($image && $image !== 'default_image.jpg' && file_exists($image)) {
                        unlink($image);
                    }
                    $image = 'uploads/' . $new_file_name; // Store relative path in database
                } else {
                    $error = "Failed to upload the image. Error: " . error_get_last()['message'];
                }
            } else {
                $error = "Invalid file type. Allowed types: jpg, jpeg, png, gif.";
            }
        }
    }
    
    if (!isset($error) && updatePost($conn, $post['id'], $title, $short_description, $image, $content)) {
        header('Location: index.php');
        exit;
    } else {
        $error = $error ?? "Failed to update post.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Post</h1>
        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($post['title']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="short_description" class="form-label">Short Description</label>
                <textarea class="form-control" id="short_description" name="short_description" rows="3" required><?php echo htmlspecialchars($post['short_description']); ?></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/jpeg,image/png,image/gif">
                <?php if ($post['image']): ?>
                    <img src="<?php echo htmlspecialchars($post['image']); ?>" alt="Current image" class="img-thumbnail mt-2" style="max-width: 200px;">
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="10" required><?php echo htmlspecialchars($post['content']); ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Post</button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>