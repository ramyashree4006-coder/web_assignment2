<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $usn = $_POST['usn'];
    $department = $_POST['department'];
    $year = $_POST['year'];
    $email = $_POST['email'];
    $post = $_POST['post'];

    $sql = "INSERT INTO students(name, usn, department, year, email, post)
            VALUES('$name', '$usn', '$department', '$year', '$email', '$post')";

    if (!$conn) {
        $message = "Database connection failed";
        $success = false;
    } else if (mysqli_query($conn, $sql)) {
        $message = "Registration Successful!";
        $success = true;
    } else {
        $message = "Error: USN already registered";
        $success = false;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Status</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #3f87a6, #ebf8e1);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background: #ffffff;
            width: 420px;
            padding: 30px;
            text-align: center;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        .card h2 {
            color: <?php echo isset($success) && $success ? "#2e7d32" : "#c62828"; ?>;
            margin-bottom: 15px;
        }

        .card p {
            color: #444;
            margin-bottom: 20px;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 12px;
            margin-bottom: 10px;
            text-decoration: none;
            font-weight: 600;
            border-radius: 8px;
            background: #3f87a6;
            color: #ffffff;
            transition: 0.3s;
        }

        .btn:hover {
            background: #326f8a;
        }

        .secondary {
            background: #eeeeee;
            color: #333;
        }

        .secondary:hover {
            background: #dddddd;
        }
    </style>
</head>
<body>

<div class="card">
    <h2><?php echo $success ? "Success" : "Failed"; ?></h2>
    <p><?php echo $message; ?></p>

    <a href="register.php" class="btn">Register Another Student</a>
    <a href="view.php" class="btn secondary">View Registered Students</a>
</div>

</body>
</html>
