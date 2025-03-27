<!DOCTYPE html>
<html>
<head>
    <title>3x3 Matrix Multiplication</title>
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
            max-width: 80%;
        }
        table {
            margin: auto;
            border-collapse: collapse;
            width: 50%;
            text-align: center;
            font-size: 20px;
        }
        table, th, td {
            border: 1px solid black;
            padding: 10px;
        }
        input, button {
            margin: 5px;
            padding: 8px;
            width: 50px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>3x3 Matrix Multiplication</h2>
        <form method="post">
            <p>Enter First Matrix:</p>
            <?php for ($i = 0; $i < 3; $i++): ?>
                <div>
                    <?php for ($j = 0; $j < 3; $j++): ?>
                        <input type="text" name="matrix1[<?php echo $i; ?>][<?php echo $j; ?>]" required>
                    <?php endfor; ?>
                </div>
            <?php endfor; ?>
            
            <p>Enter Second Matrix:</p>
            <?php for ($i = 0; $i < 3; $i++): ?>
                <div>
                    <?php for ($j = 0; $j < 3; $j++): ?>
                        <input type="text" name="matrix2[<?php echo $i; ?>][<?php echo $j; ?>]" required>
                    <?php endfor; ?>
                </div>
            <?php endfor; ?>
            <br>
            <button type="submit" name="multiply">Multiply Matrices</button>
        </form>
        
        <?php
        if (isset($_POST['multiply'])) {
            $matrix1 = $_POST['matrix1'];
            $matrix2 = $_POST['matrix2'];
            
            $result = [];
            for ($i = 0; $i < 3; $i++) {
                for ($j = 0; $j < 3; $j++) {
                    $result[$i][$j] = 0;
                    for ($k = 0; $k < 3; $k++) {
                        $result[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
                    }
                }
            }
            
            echo "<h3>First Matrix:</h3>";
            echo "<table>";
            foreach ($matrix1 as $row) {
                echo "<tr>";
                foreach ($row as $value) {
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
            
            echo "<h3>Second Matrix:</h3>";
            echo "<table>";
            foreach ($matrix2 as $row) {
                echo "<tr>";
                foreach ($row as $value) {
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
            
            echo "<h3>Resultant Matrix:</h3>";
            echo "<table>";
            foreach ($result as $row) {
                echo "<tr>";
                foreach ($row as $value) {
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
        ?>
    </div>
</body>
</html>
