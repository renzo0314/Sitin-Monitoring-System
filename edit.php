<?php
session_start();
include "database.php"; // Ensure this contains $conn (DB connection)

if (isset($_POST["update"])) {
    $idno = mysqli_real_escape_string($conn, $_POST["idno"]);
    $lastname = mysqli_real_escape_string($conn, $_POST["lastname"]);
    $firstname = mysqli_real_escape_string($conn, $_POST["firstname"]);
    $midname = mysqli_real_escape_string($conn, $_POST["midname"]);
    $course = mysqli_real_escape_string($conn, $_POST["course"]);
    $yearlevel = mysqli_real_escape_string($conn, $_POST["yearlevel"]);

    // Handle image upload
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $image_size = $_FILES['image']['size'];
    $image_error = $_FILES['image']['error'];

    // Validate image
    if ($image_error == 0) {
        $image_ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
        $allowed_ext = ['jpg', 'jpeg', 'png', 'gif'];
        
        if (!in_array($image_ext, $allowed_ext)) {
            $_SESSION['error'] = "Invalid image format. Only JPG, JPEG, PNG, and GIF are allowed.";
            header("Location: edit.php"); // Reload the page with an error
            exit();
        }

        if ($image_size > 2000000) { // 2MB limit
            $_SESSION['error'] = "Image size is too large. Maximum allowed size is 2MB.";
            header("Location: edit.php"); // Reload the page with an error
            exit();
        }

        // Generate unique name for the image to avoid overwrite
        $image_new_name = uniqid('', true) . '.' . $image_ext;
        $image_upload_path = 'uploads/' . $image_new_name;

        // Move the uploaded image to the 'uploads' directory
        if (!move_uploaded_file($image_tmp, $image_upload_path)) {
            $_SESSION['error'] = "Failed to upload image. Please try again.";
            header("Location: edit.php"); // Reload the page with an error
            exit();
        }
    } else {
        // If no image is uploaded, set the image path to the current profile image in the database
        $query = "SELECT image FROM students WHERE id = '$idno'";
        $result = mysqli_query($conn, $query);
        $user = mysqli_fetch_assoc($result);
        $image_upload_path = $user['image'];
    }

    // Check if all fields are filled
    if (empty($idno) || empty($lastname) || empty($firstname) || empty($midname) || empty($course) || empty($yearlevel)) {
        $_SESSION['error'] = "All fields should be filled.";
        header("Location: edit.php"); // Reload the page with an error
        exit();
    } else {
        // Corrected SQL Update Query
        $query = "UPDATE students SET 
                  last_name = '$lastname', 
                  first_name = '$firstname', 
                  middle_name = '$midname', 
                  course = '$course', 
                  year_level = '$yearlevel',
                  image = '$image_upload_path'
                  WHERE id = '$idno'";

        $result = mysqli_query($conn, $query);
        
        if ($result) {
            $_SESSION['success'] = "Profile updated successfully!";
            header("Location: profile.php");
            exit();
        } else {
            $_SESSION['error'] = "Update failed! Please try again.";
            header("Location: edit.php");
            exit();
        }
    }
}

// Fetch user data
$query = "SELECT * FROM students";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .profile-container {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }
        .input-control {
            width: 100%;
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn-update {
            float: right;
            width: 40%;
            padding: 10px;
            background: green;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-danger {
            width: 40%;
            padding: 10px;
            background: red;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="profile-container">
    <h2>Edit Profile</h2>

    <!-- Display errors or success messages -->
    <?php if (isset($_SESSION['error'])): ?>
        <div class="alert alert-danger"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></div>
    <?php endif; ?>
    
    <?php if (isset($_SESSION['success'])): ?>
        <div class="alert alert-success"><?php echo $_SESSION['success']; unset($_SESSION['success']); ?></div>
    <?php endif; ?>

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="text" class="input-control" name="idno" value="<?php echo $user['id']; ?>" readonly placeholder="ID Number">
        <input type="text" class="input-control" name="lastname" value="<?php echo $user['last_name']; ?>" placeholder="Last Name">
        <input type="text" class="input-control" name="firstname" value="<?php echo $user['first_name']; ?>" placeholder="First Name">
        <input type="text" class="input-control" name="midname" value="<?php echo $user['middle_name']; ?>" placeholder="Middle Name">
        <input type="text" class="input-control" name="course" value="<?php echo $user['course']; ?>" placeholder="Course">
        <input type="text" class="input-control" name="yearlevel" value="<?php echo $user['year_level']; ?>" placeholder="Year Level">
        <input type="file" class="input-control" name="image" placeholder="Upload Profile Image">
        <a href="profile.php" class="btn btn-danger">Go Back</a>
        <button type="submit" name="update" class="btn-update">Update</button>
        
    </form>
</div>

</body>
</html>
