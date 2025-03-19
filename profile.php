<?php
// Ensure you start the session and connect to the database
session_start();
require_once "database.php";

// Assuming you're fetching user data or student data
$query = "SELECT * FROM students"; // Or use a query that suits your use case
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
    
    img{
        margin: 20px 0px 25px 25px;
        width: 150px; 
        height: 150px;
        border-radius: 50%; 
        border: 3px solid #fff; 
    }

    h3{
        font-size: 16px;
        margin-left: 5%;  
              
    }

    .sidebar {
        width: 250px;
        background: #301934;
        color: white;
        height: 100vh;
        padding: 20px;
        position: fixed;
        top: 0;
        left: 0;
    }

   .sidebar h2 {
        text-align: center;
    }

    .sidebar ul {
        list-style: none;
        padding: 0;
    }

    .sidebar ul li {
        padding: 10px;
        margin: 20px 0;
        background:#C2B280;
        text-align: center;
        border-radius: 5px;
    }
    
    .sidebar ul li a {
            color: black;
            text-decoration: none;
            display: block;
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

<?php   

while($row = mysqli_fetch_assoc($result))
{
?>

</head>
<body>
<div class="dashboard-container">
    <!-- Sidebar -->
    <aside class="sidebar">
        <h2>Profile</h2>
        <img src="<?php echo $row['image'] ? $row['image'] : 'images/avatar.png'; ?>" alt="Profile Picture">
        <h3>Hello, <?php echo $row['last_name'] . ', ' . $row['first_name'];?>!</h3>
        <ul>
            <li><a href="index.php"> Dashboard</a></li>
            <li><a href="announcements.php"> Announcements & Rules</a></li>
            <li><a href="sessions.php"> View Remaining Session</a></li>

            <li><a href="history.php"> History</a></li>
            <li><a href="reservation.php"> Reservation</a></li>
            <li><a href="login.php"> Log-out</a></li>
        </ul>
    </aside>   
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
        <a href="edit.php" class="btn btn-primary">Edit</a>
    </div>
</div>

</body>
</html>