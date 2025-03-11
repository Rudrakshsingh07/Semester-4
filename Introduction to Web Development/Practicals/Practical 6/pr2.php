<?php
function isLowerCase($string) {
    return ctype_lower($string) ? "The string is lowercase." : "The string is not lowercase.";
}

function reverseString($string) {
    return strrev($string);
}

function removeWhiteSpaces($string) {
    return str_replace(' ', '', $string);
}

function replaceWord($string, $search, $replace) {
    return str_replace($search, $replace, $string);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>String Operations</title>
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
        <h2>String Operations</h2>
        <form method="post">
            <input type="text" name="inputString" placeholder="Enter a string" required>
            <input type="text" name="searchWord" placeholder="Word to replace (optional)">
            <input type="text" name="replaceWord" placeholder="Replacement word (optional)">
            <br>
            <button type="submit" name="process">Process</button>
        </form>
        
        <?php
        if (isset($_POST['process'])) {
            $inputString = $_POST['inputString'];
            $searchWord = $_POST['searchWord'];
            $replaceWord = $_POST['replaceWord'];
            
            echo "<h3>Results:</h3>";
            echo "<p><strong>Is Lowercase:</strong> " . isLowerCase($inputString) . "</p>";
            echo "<p><strong>Reversed String:</strong> " . reverseString($inputString) . "</p>";
            echo "<p><strong>Without White Spaces:</strong> " . removeWhiteSpaces($inputString) . "</p>";
            
            if (!empty($searchWord) && !empty($replaceWord)) {
                echo "<p><strong>Replaced String:</strong> " . replaceWord($inputString, $searchWord, $replaceWord) . "</p>";
            }
        }
        ?>
    </div>
</body>
</html>
