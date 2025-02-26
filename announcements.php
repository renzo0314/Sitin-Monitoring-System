<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv = "X-UA-Compatibla "content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<title>Announcement</title>
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
            color: white;
            text-decoration: none;
            display: block;
    }

    .announcement {
        width: 40%;
        background: white;
        padding: 50px;
        border-radius: 8px;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        margin-right: 200px;
    }
    
    .announcement h2 {
        background: #301934;
        color: white;
        padding: 10px;
        border-radius: 5px;
        text-align: center;
    }

    .announcement-box {
        margin-top: 10px;
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }

    .rules {
        background: white;
        padding: 0px;
        border-radius: 8px;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
    }

    .rules h2 {
        background: #301934;
        color: white;
        padding: 10px;
        border-radius: 5px;
        text-align: center;
    }

    </style>
</head>

<body>
<body>
<div class="dashboard-container">
    <!-- Sidebar -->
    <aside class="sidebar">
        <h2>Announcement</h2>
        <img src="images/avatar.png" alt="Profile Picture">
        <h3>Hello Toring, Lorenz Lord !!</h3>
        <ul>
            <li><a href="index.php"> Dashboard</a></li>
            <li><a href="profile.php"> Profile</a></li>
            <li><a href="sessions.php"> View Remaining Session</a></li>
            <li><a href="lab_rules.php">Lab Rules & Regulations</a></li>
            <li><a href="history.php"> History</a></li>
            <li><a href="reservation.php"> Reservation</a></li>
            <li><a href="login.php"> Log-out</a></li>
        </ul>
        </aside>
       
    <!--Announcement-panel -->
    <div class = "announcement">
    <div class = "announcement-container">
        <h2>📢 Announcement</h2>
        <h3><strong>CSS Admin | 2025-Feb-03</strong></h3>
        <p> The College of Computer Studies will open the registration of students for the Sit-in privilege starting tomorrow. Thank you! Lab Supervisor </p>
    </div>
        <div class = "announcement-box">
        <h3><strong> CSS Admin | 2025-May-08</strong> </h3>
        <p> Important Announcement We are excited to announce the launch of our new website! Explore our latest products and services now! </p>
    </div>
    </div>

    <!-- Rules & Regulations Panel -->
    <div class="rules">
        <h2>📜 Rules and Regulation</h2>
        <h3>University of Cebu</h3>
        <h4>COLLEGE OF INFORMATION & COMPUTER STUDIES</h4>
        <p><strong>LABORATORY RULES AND REGULATIONS</strong></p>
        <p>To avoid embarrassment and maintain camaraderie with your friends and superiors at our laboratories, please observe the following:</p>
       <ol>
        <li>Maintain silence, proper decorum, and discipline inside the laboratory. Mobile phones and other devices must be switched off.</li>
            <li>Games are not allowed inside the lab. This includes computer-related games, card games, and other distractions.</li>
            <li>Surfing the internet is allowed only with instructor permission. Downloading and installing software is strictly prohibited.</li>
        </ol>
    </div>

</body>
</html>
</body>



        
        
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     <!-- Announcements Panel -->
        <!--<div class="announcement-box"> -
        <div class="announcement">
            <h2>📢 Announcement</h2>
            <h3> CSS Admin | 2025-Feb-03</h3>
            <p> The College of Computer Studies will open the registration of students for the Sit-in privilege starting tomorrow. Thank you! Lab Supervisor </p>
        </div>
        <div class = "announcement-2">
            <h3> CSS Admin | 2025-May-08 </h3>
            <p> Important Announcement We are excited to announce the launch of our new website! Explore our latest products and services now! </p>
        </div>
        </div> -->
        <!-- Rules & Regulations Panel -->
        