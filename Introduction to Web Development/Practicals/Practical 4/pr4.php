<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table Generator</title>
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
    </style>
</head>
<body>
    <div class="container">
        <h2>Multiplication Table Generator</h2>
        <form method="post">
            <input type="number" name="number" required placeholder="Enter a number" min="1">
            <br>
            <button type="submit" name="generate">Generate</button>
        </form>
        
        <?php
        if (isset($_POST['generate'])) {
            $number = $_POST['number'];
            
            echo "<h3>Multiplication Table for $number:</h3>";
            echo "<table border='1' style='margin: auto; border-collapse: collapse; width: 50%;'>";
            echo "<tr><th>Multiplier</th><th>Result</th></tr>";
            
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr><td>$number x $i</td><td>" . ($number * $i) . "</td></tr>";
            }
            
            echo "</table>";
        }
        ?>
    </div>
</body>
</html>
