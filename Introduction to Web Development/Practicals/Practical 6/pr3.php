<?php
function generateRandomNumber($min, $max) {
    return rand($min, $max);
}

function convertNumber($decimal) {
    return [
        'binary' => decbin($decimal),
        'octal' => decoct($decimal),
        'hexadecimal' => dechex($decimal)
    ];
}

function calculateTrigonometry($angle) {
    $radians = deg2rad($angle);
    return [
        'sin' => sin($radians),
        'cos' => cos($radians),
        'tan' => tan($radians)
    ];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Math Operations</title>
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
        input, button {
            margin: 10px;
            padding: 10px;
            width: 300px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Math Operations</h2>
        <form method="post">
            <input type="number" name="min" placeholder="Min value (for random number)" required>
            <input type="number" name="max" placeholder="Max value (for random number)" required>
            <input type="number" name="decimal" placeholder="Enter a decimal number" required>
            <input type="number" name="angle" placeholder="Enter an angle in degrees" required>
            <br>
            <button type="submit" name="process">Process</button>
        </form>
        
        <?php
        if (isset($_POST['process'])) {
            $min = $_POST['min'];
            $max = $_POST['max'];
            $decimal = $_POST['decimal'];
            $angle = $_POST['angle'];
            
            echo "<h3>Results:</h3>";
            echo "<p><strong>Random Number:</strong> " . generateRandomNumber($min, $max) . "</p>";
            
            $converted = convertNumber($decimal);
            echo "<p><strong>Binary:</strong> " . $converted['binary'] . "</p>";
            echo "<p><strong>Octal:</strong> " . $converted['octal'] . "</p>";
            echo "<p><strong>Hexadecimal:</strong> " . $converted['hexadecimal'] . "</p>";
            
            $trigValues = calculateTrigonometry($angle);
            echo "<p><strong>Sin($angle°):</strong> " . $trigValues['sin'] . "</p>";
            echo "<p><strong>Cos($angle°):</strong> " . $trigValues['cos'] . "</p>";
            echo "<p><strong>Tan($angle°):</strong> " . $trigValues['tan'] . "</p>";
        }
        ?>
    </div>
</body>
</html>