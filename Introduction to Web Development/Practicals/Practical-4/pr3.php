<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci Sequence Generator</title>
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
        <h2>Fibonacci Sequence Generator</h2>
        <form method="post">
            <input type="number" name="terms" required placeholder="Enter number of terms" min="1">
            <br>
            <button type="submit" name="generate">Generate</button>
        </form>
        
        <?php
        function fibonacci($n) {
            $fib = [0, 1];
            for ($i = 2; $i < $n; $i++) {
                $fib[] = $fib[$i - 1] + $fib[$i - 2];
            }
            return array_slice($fib, 0, $n);
        }
        
        if (isset($_POST['generate'])) {
            $terms = $_POST['terms'];
            $sequence = fibonacci($terms);
            
            echo "<h3>Fibonacci Sequence:</h3>";
            echo "<p>" . implode(", ", $sequence) . "</p>";
        }
        ?>
    </div>
</body>
</html>
