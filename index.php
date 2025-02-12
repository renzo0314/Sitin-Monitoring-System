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
            padding: 40px;
            display: block;
            margin: auto;
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
            color: white;
            text-decoration: none;
            display: block;
        }
         
        /* Main Content */
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
            <img src="images/avatar.jpg" alt="Profile Picture">
            <ul>
                <li><a href="profile.php">👤 Profile</a></li>
                <li><a href="edit.php">✏️ Edit</a></li>
                <li><a href="announcements.php">📢 View Announcements</a></li>
                <li><a href="sessions.php">⏳ View Remaining Session</a></li>
                <li><a href="rules.php">📜 Sit-in Rules</a></li>
                <li><a href="lab_rules.php">🧑‍💻 Lab Rules & Regulations</a></li>
                <li><a href="history.php">📂 History</a></li>
                <li><a href="reservation.php">📅 Reservation</a></li>
                <li><a href="login.php">🚪 Log-out</a></li>
            </ul>
        </aside>

    <!-- Main Content -->
    <main class="content">
            <h1>Welcome to Sit-in Monitoring System</h1>
            <div class="dashboard-stats">
</body>
</html>