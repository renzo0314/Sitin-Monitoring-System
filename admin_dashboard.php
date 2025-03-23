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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Admin dashboard</title>
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

        .search-bar{
            width: 100%;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            border: 1px solid black;
            border-radius: 25px;
            padding: 5px 15px;
            background-color: #fff;
        }

        .search-bar input {
            border: none;
            outline: none;
            width: 100%;
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
                <li><a href="announcements_Admin.php"> View Sit-in Records</a></li>
                <li><a href="sessions.php"> Sit-in Reports</a></li>
                <li><a href="history.php"> Feedback</a></li>
                <li><a href="login.php"> Log-out</a></li>
            </ul>
        </aside>   
    <!-- Main Content -->
    <div class="container mt-4">
    <div class="row">
    <input type="text" placeholder="Search Students.." name="search" class="search-bar">
        <!-- Statistics Panel -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-dark text-white">Statistics</div>
                <div class="card-body">
                    <p><strong>Students Registered:</strong> 103</p>
                    <p><strong>Currently Sit-In:</strong> 0</p>
                    <p><strong>Total Sit-In:</strong> 73</p>
                    <canvas id="pieChart"></canvas>
                </div>
            </div>
        </div>
        <!-- Announcements Panel -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-dark text-white">Announcement</div>
                <div class="card-body">
                    <textarea class="form-control" placeholder="New Announcement"></textarea>
                    <button class="btn btn-success mt-2">Submit</button>
                    <h5 class="mt-3">Posted Announcements</h5>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>CCS Admin | 2025-Feb-25</strong><br>UC did it again.</li>
                        <li class="list-group-item"><strong>CCS Admin | 2025-Feb-03</strong><br>The College of Computer Studies will open registration of students for the Sit-in privilege starting tomorrow.</li>
                        <li class="list-group-item"><strong>CCS Admin | 2024-May-08</strong><br>Important Announcement! We are excited to announce the launch of our new website!</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
const ctx = document.getElementById('pieChart').getContext('2d');
new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['C#', 'Java', 'ASP.Net', 'PHP'],
        datasets: [{
            data: [40, 30, 15, 15],
            backgroundColor: ['#ff6384', '#36a2eb', '#ffce56', '#4bc0c0']
        }]
    }
});
</script>
</body>
</html>
