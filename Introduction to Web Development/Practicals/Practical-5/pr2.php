<!DOCTYPE html>
<html>  
<head>
    <title>Array Sorting</title>
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
        <h2>Array Sorting</h2>
        <form method="post">
            <input type="text" name="array_input" required placeholder="Enter numbers separated by commas">
            <br>
            <button type="submit" name="sort">Sort Array</button>
        </form>
        
        <?php
        if (isset($_POST['sort'])) {
            $input = $_POST['array_input'];
            $arr = explode(',', $input);
            
            // Convert input values to integers
            foreach ($arr as $key => $value) {
                $arr[$key] = (int)trim($value);
            }
            
            // Sort array without using built-in functions
            $n = count($arr);
            for ($i = 0; $i < $n - 1; $i++) {
                for ($j = 0; $j < $n - $i - 1; $j++) {
                    if ($arr[$j] > $arr[$j + 1]) {
                        // Swap values
                        $temp = $arr[$j];
                        $arr[$j] = $arr[$j + 1];
                        $arr[$j + 1] = $temp;
                    }
                }
            }
            
            echo "<h3>Sorted Array:</h3>";
            echo "<p>" . implode(", ", $arr) . "</p>";
        }
        ?>
    </div>
</body>
</html>
