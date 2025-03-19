
<?php
// Ensure you start the session and connect to the database
session_start();
require_once "database.php";

// Assuming you're fetching user data or student data
$query = "SELECT * FROM students"; // Or use a query that suits your use case
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
            color: black;
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
    .container {
    display: flex;
    justify-content: space-between;
    gap: 20px;
    margin-left: 250px;
}

    .announcement, .rules {
    width: 48%;
    padding: 25px;
    border-radius: 8px;
    background: #f8f8f8;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
    }

    .announcement-container, .announcement-box {
    margin-bottom: 10px;
    margin-left: 50px;
    }

    .rules ol {
    padding-left: 20px;
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
            <h2>Announcement</h2>
            <img src="<?php echo $row['image'] ? $row['image'] : 'images/avatar.png'; ?>" alt="Profile Picture">
            <h3>Hello, <?php echo $row['last_name'] . ', ' . $row['first_name'];?>!</h3>
            <ul>
                <li><a href="profile.php"> Profile</a></li>
                <li><a href="index.php"> Dashboard</a></li>
                <li><a href="sessions.php"> View Remaining Session</a></li>
                <li><a href="history.php"> History</a></li>
                <li><a href="reservation.php"> Reservation</a></li>
                <li><a href="login.php"> Log-out</a></li>
            </ul>
        </aside>
       
    <!--Announcement-panel -->
    <div class="container">
    <div class="announcement">
        <div class="announcement-container">
            <h2>📢 Announcement</h2>
            <h3><strong>CSS Admin | 2025-Feb-03</strong></h3>
            <p>The College of Computer Studies will open the registration of students for the Sit-in privilege starting tomorrow. Thank you! Lab Supervisor</p>
        </div>
        <div class="announcement-box">
            <h3><strong>CSS Admin | 2025-May-08</strong></h3>
            <p>Important Announcement We are excited to announce the launch of our new website! Explore our latest products and services now!</p>

             <h3><strong>CSS Admin | 2025-Feb-03</strong></h3>
            <p>The College of Computer Studies will open the registration of students for the Sit-in privilege starting tomorrow. Thank you! Lab Supervisor</p>

            <h3><strong>CSS Admin | 2025-May-08</strong></h3>
            <p>Important Announcement We are excited to announce the launch of our new website! Explore our latest products and services now!</p>
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
        
=======
</div>

</body>
</html>
</body>
>>>>>>> 5665691 (Updated Admin)
