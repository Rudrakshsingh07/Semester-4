<!DOCTYPE html>
<html>
<head>
    <title>Student Grade Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
        .container {
            display: inline-block;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 2px 2px 12px rgba(0,0,0,0.1);
        }
        input, button {
            margin: 10px;
            padding: 8px;
        }
        table {
            margin-top: 20px;
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Student Grade Calculator</h2>
        <form method="post">
            <input type="number" name="subject1" required placeholder="Enter marks for Subject 1" min="0" max="100">
            <input type="number" name="subject2" required placeholder="Enter marks for Subject 2" min="0" max="100">
            <input type="number" name="subject3" required placeholder="Enter marks for Subject 3" min="0" max="100">
            <input type="number" name="subject4" required placeholder="Enter marks for Subject 4" min="0" max="100">
            <br>
            <button type="submit" name="calculate">Calculate Result</button>
        </form>
        
        <?php
        function getGrade($marks) {
            if ($marks >= 85) return "AA";
            if ($marks >= 75) return "AB";
            if ($marks >= 65) return "BB";
            if ($marks >= 55) return "BC";
            if ($marks >= 45) return "CC";
            if ($marks >= 40) return "CD";
            if ($marks >= 35) return "DD";
            return "FF";
        }
        
        if (isset($_POST['calculate'])) {
            $subjects = [
                $_POST['subject1'], 
                $_POST['subject2'], 
                $_POST['subject3'], 
                $_POST['subject4']
            ];
            
            $result = "PASS";
            echo "<table><tr><th>Subject</th><th>Marks</th><th>Grade</th></tr>";
            foreach ($subjects as $index => $marks) {
                $grade = getGrade($marks);
                echo "<tr><td>Subject " . ($index + 1) . "</td><td>$marks</td><td>$grade</td></tr>";
                if ($grade == "FF") {
                    $result = "FAIL";
                }
            }
            echo "</table>";
            
            echo "<h3>Final Result: $result</h3>";
        }
        ?>
    </div>
</body>
</html>
