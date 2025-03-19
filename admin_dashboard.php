<?php
// Ensure you start the session and connect to the database
session_start();
require_once "database.php";

// Assuming you're fetching user data or student data
$query = "SELECT * FROM admins"; // Or use a query that suits your use case
$result = mysqli_query($conn, $query);

// Check if there are any results and fetch the data
if ($result) {
    // Fetch the first row from the result set
    $row = mysqli_fetch_assoc($result);
} else {
    // Handle error if no results found or query fails
    echo "Error: " . mysqli_error($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv = "X-UA-Compatibla "content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>User dashboard</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            display: flex;
            background-color: #f4f4f4;
            margin: 0;
        }
        img{
            margin: 20px 0px 25px 25px;
            width: 150px; 
            height: 150px;
            border-radius: 50%; 
            border: 3px solid #fff; 
        }

        h2{
            text-align: center;
        }

        h3{
            font-size: 16px;
            text-align: center;
            margin-bottom: 50px;  
              
        }
        
        /* Sidebar Styles */
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
         
        /* Main Content */
        .logo {
            border-radius: 4px;		
            width: 230px;				
            height: auto;
        }
         .content {
            margin-left: 100px;
            padding: 20px;
            width: 100%;
            text-align: center;

        }

        .dashboard-stats {
            display: flex;
            gap: 20px;
        }
        .h1{
            margin-left: 50px;
        }
    </style>
</head>
<body>
<div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <h2>Dashboard</h2>
            <img src="images\avatar.png" alt="Profile Picture">
            <h3>Hello, Admin ! </h3>
            <ul>
                <li><a href="announcements_Admin.php"> Announcements</a></li>
                <li><a href="sessions.php"> View Remaining Session</a></li>
                <li><a href="history.php"> History</a></li>
                <li><a href="reservation.php"> Reservation</a></li>
                <li><a href="login.php"> Log-out</a></li>
            </ul>
        </aside>   
    <!-- Main Content -->
    <main class="content">
        <h1>Welcome Admin</h1>
        <div class="dashboard-stats">
</body>
</html>