<?php

require_once "database.php";
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .profile-container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .profile-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .profile-container .profile-info {
            margin-bottom: 10px;
        }
        .profile-container .profile-info label {
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php   

    while($row = mysqli_fetch_assoc($result))
    {
?>
<div class="profile-container">
    <h2>User Profile</h2>
    <div class="profile-info">
        <label>ID Number:</label>
        <?php echo $row['id']; ?>
    </div>
    <div class="profile-info">
        <label>Last Name:</label>
        <?php echo $row['last_name']; ?>
    </div>
    <div class="profile-info">
        <label>First Name:</label>
        <?php echo $row['first_name']; ?>
    </div>
    <div class="profile-info">
        <label>Middle Name:</label>
        <?php echo $row['middle_name']; ?>
    </div>
    <div class="profile-info">
        <label>Course:</label>
        <?php echo $row['course']; ?>
    </div>
    <div class="profile-info">
        <label>Year Level:</label>
        <?php echo $row['year_level']; ?>
    </div>
    <?php
        }
    ?>
    <div class="profile-info">
        <a href="index.php" class="btn btn-danger">Go back</a>
        <a href="edit.php" class="btn btn-primary">Edit</a>
    </div>
</div>

</body>
</html>