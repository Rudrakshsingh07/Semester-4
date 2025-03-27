<!DOCTYPE html>
<html>
<head>
    <title>String Length and Word Count</title>
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
        <h2>String Length and Word Count</h2>
        <form method="post">
            <input type="text" name="input_string" required placeholder="Enter a string">
            <br>
            <button type="submit" name="calculate">Calculate</button>
        </form>
        
        <?php
        if (isset($_POST['calculate'])) {
            $input_string = $_POST['input_string'];
            
            // Calculate length without using string functions
            $length = 0;
            while (isset($input_string[$length])) {
                $length++;
            }
            
            // Count words without using string functions
            $word_count = 0;
            $in_word = false;
            for ($i = 0; $i < $length; $i++) {
                if ($input_string[$i] != ' ') {
                    if (!$in_word) {
                        $word_count++;
                        $in_word = true;
                    }
                } else {
                    $in_word = false;
                }
            }
            
            echo "<h3>String Length: $length</h3>";
            echo "<h3>Word Count: $word_count</h3>";
        }
        ?>
    </div>
</body>
</html>
