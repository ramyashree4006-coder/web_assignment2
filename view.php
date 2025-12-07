<?php
include "db.php";
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registered Students</title>
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
            align-items: center;
            justify-content: center;
        }

        .container {
            background: #ffffff;
            width: 90%;
            max-width: 1000px;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .actions {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .btn {
            padding: 10px 18px;
            background: #3f87a6;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn:hover {
            background: #326f8a;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }

        th {
            background: #3f87a6;
            color: white;
        }

        tr:hover {
            background: #f1f9fc;
        }

        .no-data {
            text-align: center;
            padding: 20px;
            color: #666;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Registered Students for Election</h2>

    <div class="actions">
        <a href="register.php" class="btn">← Back to Registration</a>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>USN</th>
            <th>Department</th>
            <th>Year</th>
            <th>Email</th>
            <th>Post</th>
        </tr>

        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['usn']."</td>";
                echo "<td>".$row['department']."</td>";
                echo "<td>".$row['year']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['post']."</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7' class='no-data'>No records found</td></tr>";
        }
        ?>
    </table>
</div>

</body>
</html>
