<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Registration</title>
    <style>
        body {
            background-color: #121212;
            color: #e0e0e0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: #1e1e1e;
            padding: 20px;
            border-radius: 10px;
            width: 350px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
        }
        h2 {
            text-align: center;
        }
        input, select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: none;
            border-radius: 5px;
            background: #333;
            color: #e0e0e0;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #6200ea;
            border: none;
            color: white;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
            border-radius: 5px;
        }
        button:hover {
            background: #3700b3;
        }
        .message {
            text-align: center;
            margin-top: 10px;
            font-weight: bold;
            color: #00ff00;
        }
        .error {
            color: #ff0000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Employee Registration</h2>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Database connection
            $host = "localhost";
            $user = "root";
            $pass = "";
            $dbname = "employee_db";

            $conn = new mysqli($host, $user, $pass, $dbname);
            if ($conn->connect_error) {
                die("<p class='error'>Connection failed: " . $conn->connect_error . "</p>");
            }

            // Ensure all required fields are provided
            if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['department']) && !empty($_POST['position'])) {
                $name = trim($_POST['name']);
                $email = trim($_POST['email']);
                $department = trim($_POST['department']);
                $position = trim($_POST['position']);

                // Insert data into the correct table
                $stmt = $conn->prepare("INSERT INTO employees (name, email, department, position) VALUES (?, ?, ?, ?)");
                $stmt->bind_param("ssss", $name, $email, $department, $position);

                if ($stmt->execute()) {
                    echo "<p class='message'>Employee registered successfully!</p>";
                } else {
                    echo "<p class='error'>Error: " . $stmt->error . "</p>";
                }

                $stmt->close();
            } else {
                echo "<p class='error'>Please fill in all fields.</p>";
            }

            $conn->close();
        }
        ?>

        <form action="" method="POST">
            <label>Name:</label>
            <input type="text" name="name" required>

            <label>Email:</label>
            <input type="email" name="email" required>

            <label>Department:</label>
            <select name="department" required>
                <option value="HR">HR</option>
                <option value="IT">IT</option>
                <option value="Finance">Finance</option>
                <option value="Marketing">Marketing</option>
            </select>

            <label>Position:</label>
            <input type="text" name="position" required>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
