<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
    <!-- <style>
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
        input, select, button {
            margin: 10px;
            padding: 8px;
        }
    </style> -->
</head>
<body>
    <div class="container">
        <h2>Simple Calculator</h2>
        <form method="post">
            <input type="number" name="num1" required placeholder="Enter first number">
            <select name="operation">
                <option value="add">+</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
            </select>
            <input type="number" name="num2" required placeholder="Enter second number">
            <br>
            <button type="submit" name="calculate">Calculate</button>
        </form>
        
        <?php
        if (isset($_POST['calculate'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];
            
            switch ($operation) {
                case 'add':
                    $result = $num1 + $num2;
                    break;
                case 'subtract':
                    $result = $num1 - $num2;
                    break;
                case 'multiply':
                    $result = $num1 * $num2;
                    break;
                case 'divide':
                    $result = ($num2 != 0) ? $num1 / $num2 : 'Error: Division by zero';
                    break;
                default:
                    $result = 'Invalid operation';
            }
            echo "<h3>Result: $result</h3>";
        }
        ?>
    </div>
</body>
</html>