<!DOCTYPE html>
<html>
<head>
    <title>Student Election Registration</title>
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
            width: 420px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        .container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: 600;
            margin-bottom: 6px;
            color: #444;
        }

        input, select {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            outline: none;
            transition: 0.3s;
        }

        input:focus, select:focus {
            border-color: #3f87a6;
            box-shadow: 0 0 5px rgba(63,135,166,0.5);
        }

        button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background: #3f87a6;
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 10px;
            transition: 0.3s;
        }

        button:hover {
            background: #326f8a;
        }

        .link {
            text-align: center;
            margin-top: 15px;
        }

        .link a {
            text-decoration: none;
            color: #3f87a6;
            font-weight: 600;
        }

        .link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Student Election Registration</h2>

    <form method="post" action="insert.php">

        <div class="form-group">
            <label>Student Name</label>
            <input type="text" name="name" required>
        </div>

        <div class="form-group">
            <label>USN</label>
            <input type="text" name="usn" required>
        </div>

        <div class="form-group">
            <label>Department</label>
            <select name="department" required>
                <option value="">Select Department</option>
                <option value="CSE">Computer Science</option>
                <option value="ISE">Information Science</option>
                <option value="ECE">Electronics & Communication</option>
                <option value="EEE">Electrical & Electronics</option>
                <option value="ME">Mechanical</option>
                <option value="CE">Civil</option>
            </select>
        </div>

        <div class="form-group">
            <label>Year</label>
            <input type="number" name="year" min="1" max="4" required>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" required>
        </div>

        <div class="form-group">
    <label>Applying For (Post)</label>
    <select name="post" required>
        <option value="">Select Post</option>
        <option value="Class Representative">Class Representative</option>
        <option value="Student Council President">Student Council President</option>
        <option value="Student Council Vice President">Student Council Vice President</option>
        <option value="Student Secretary">Student Secretary</option>
        <option value="Student Treasurer">Student Treasurer</option>
        <option value="Cultural Committee Head">Cultural Committee Head</option>
        <option value="Sports Secretary">Sports Secretary</option>
    </select>
</div>


        <button type="submit">Register</button>
    </form>

    <div class="link">
        <a href="view.php">View Registered Students</a>
    </div>
</div>

</body>
</html>
