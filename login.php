
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
    require_once "database.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = mysqli_real_escape_string($conn, $_POST['user'] ?? '');
        $pass = mysqli_real_escape_string($conn, $_POST['pass'] ?? '');

        if (!empty($user) && !empty($pass)) {
            // Check in students table
            $sql_student = "SELECT * FROM students WHERE username = '$user'";
            $result_student = mysqli_query($conn, $sql_student);
            $student = mysqli_fetch_array($result_student, MYSQLI_ASSOC);

            // Check in admins table
            $sql_admin = "SELECT * FROM admins WHERE username = '$user'";
            $result_admin = mysqli_query($conn, $sql_admin);
            $admin = mysqli_fetch_array($result_admin, MYSQLI_ASSOC);

            if ($student && $pass === $student['password']) { // Compare plaintext password
                $_SESSION['username'] = $user;
                $_SESSION['usertype'] = 'user';
                header("Location: index.php");
                exit();
            } elseif ($admin && $pass === $admin['password']) { // Compare plaintext password
                $_SESSION['username'] = $user;
                $_SESSION['usertype'] = 'admin';
                header("Location: admin_dashboard.php");
                exit();
            } else {
                echo "<div class='alert alert-danger'>Invalid username or password.</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Please fill in all fields.</div>";
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