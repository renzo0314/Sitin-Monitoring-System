<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv = "X-UA-Compatibla "content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCS Login Sitin Monitoring System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="login-container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $user = $_POST['user'] ?? '';
            $pass = $_POST['pass'] ?? '';

            require_once "database.php";
            
            $sql = "SELECT * FROM users WHERE username = '$user'";
            $result = mysqli_query($conn, $sql);
            $user= mysqli_fetch_array($result, MYSQLI_ASSOC);
            
            if (empty($user) || empty($pass)) {
                echo "<div class='alert alert-danger'>Invalid username or password.</div>";
            } else { 
                header("location: index.php");
                die();      
            }
        }
        ?>
        <img src="Images/UC.png" alt="logo-UC">
        <img src="Images/css.png" alt="logo-CSS">
        <h1>CCS Sitin Monitoring System</h1>
        <form action = "login.php" method="post">
            <!-- Username Field -->
            <div class="input-group">
                <label for="user">Username: </label>
                <input type="text" id="user" name="user" required />
            </div>

            <!-- Password Field -->
            <div class="input-group">
                <label for="pass">Password: </label>
                <input type="password" id="pass" name="pass" required />
            </div>

            <!-- Submit Button -->
            <div class="input-group">
                <input type="submit" name="login" value="Login" class = "btn btn-primary">

            <!-- Register Button -->
            <a href="registration.php" class="register-btn">Register</a>
            </div>
        </form>
    </div>
</body>
</html>