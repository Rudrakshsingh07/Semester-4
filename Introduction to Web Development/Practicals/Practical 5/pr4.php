<?php
function encodeToMorse($message) {
    $morseCode = [
        'A' => '.-', 'B' => '-...', 'C' => '-.-.', 'D' => '-..', 'E' => '.',
        'F' => '..-.', 'G' => '--.', 'H' => '....', 'I' => '..', 'J' => '.---',
        'K' => '-.-', 'L' => '.-..', 'M' => '--', 'N' => '-.', 'O' => '---',
        'P' => '.--.', 'Q' => '--.-', 'R' => '.-.', 'S' => '...', 'T' => '-',
        'U' => '..-', 'V' => '...-', 'W' => '.--', 'X' => '-..-', 'Y' => '-.--', 'Z' => '--..',
        '0' => '-----', '1' => '.----', '2' => '..---', '3' => '...--', '4' => '....-',
        '5' => '.....', '6' => '-....', '7' => '--...', '8' => '---..', '9' => '----.',
        ' ' => ' / '
    ];
    
    $message = strtoupper($message);
    $encodedMessage = '';
    
    for ($i = 0; $i < strlen($message); $i++) {
        if (isset($morseCode[$message[$i]])) {
            $encodedMessage .= $morseCode[$message[$i]] . ' ';
        }
    }
    
    return trim($encodedMessage);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Morse Code Encoder</title>
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
        <h2>Morse Code Encoder</h2>
        <form method="post">
            <input type="text" name="message" placeholder="Enter message" required>
            <br>
            <button type="submit" name="encode">Encode</button>
        </form>
        
        <?php
        if (isset($_POST['encode'])) {
            $message = $_POST['message'];
            $encodedMessage = encodeToMorse($message);
            echo "<h3>Encoded Morse Code:</h3>";
            echo "<p>$encodedMessage</p>";
        }
        ?>
    </div>
</body>
</html>
