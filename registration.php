<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv = "X-UA-Compatibla "content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration-CSS Sitin Monitoring System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="register-container">
    <h1>Registration - CCS Sitin</h1>
    <?php
        if (isset($_POST["submit"])) {
            $idno = $_POST["idno"];
            $lastname = $_POST["lastname"];
            $firstname = $_POST["firstname"];
            $middlename = $_POST["midname"];
            $course = $_POST["course"];
            $year_level = $_POST["yearlevel"];
            $username = $_POST["username"];
            $password = $_POST["password"];
            
            $errors = array();
            
            if (empty ($idno) OR empty ($lastname) OR empty ($firstname) OR empty ($middlename) OR empty ($course) OR empty ($year_level) OR empty ($username) OR empty ($password)) {
                array_push($errors, "All fields are required.");
            }
            if (!filter_var($idno, FILTER_VALIDATE_INT)) {
                array_push($errors, "ID Number must be an integer.");
            }
            if (strlen($password) < 8) {
                array_push($errors, "Password must be at least 8 characters.");
            }
            require_once "database.php";
            if (count($errors)>0) {
                foreach ($errors as $error) {
                    echo "<div class = 'alert alert-danger'>$error</div>";
                }
            }else{
                $sql = "INSERT INTO users (id, last_name, first_name, middle_name, course, year_level, username, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
                if ($prepareStmt) {
                    mysqli_stmt_bind_param($stmt, "isssssss", $idno, $lastname, $firstname, $middlename, $course, $year_level, $username, $password);
                    mysqli_stmt_execute($stmt);
                    echo "<div class='alert alert-success'>Registration successful!</div>";
                    
                }else{
                    die("Something went wrong!!");
                }
            }
        }
        ?>
        <form action="registration.php" method="POST">
            <div class="input-group">
                <input type="text" class="input-control" name="idno" placeholder="ID Number:">
            </div>
            <div class="input-group">
                <input type="text" class="input-control" name="lastname" placeholder="Last Name:">    
            </div>
            <div class="input-group">
                <input type="text" class="input-control" name="firstname" placeholder="First Name:">
            </div>
            <div class="input-group">
                <input type="text" class="input-control" name="midname" placeholder="Middle Name:">
            </div>
            <div class="input-group">
                <input type="text" class="input-control" name="course" placeholder="Course:">
            </div>
            <div class="input-group">
                <input type="text" class="input-control" name="yearlevel" placeholder="Year Level:">
            </div>
            <div class="input-group">
                <input type="text" class="input-control" name="username" placeholder="Username:">
            </div>
            <div class="input-group">
                <input type="password" class="input-control" name="password" placeholder="Password:">
            </div>    
            <div class="back-to-login">
                <input type="submit" class="btn btn-primary" name="submit" value="Register">
                <a href="login.php">Back to Login</a> <!-- redirect to login page -->
        </form>
</body>
</html>