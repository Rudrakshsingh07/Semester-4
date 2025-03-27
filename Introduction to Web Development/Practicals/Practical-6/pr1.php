<?php
function minCurrencyNotes($amount) {
    $denominations = [100, 50, 20, 10, 5, 2, 1];
    $noteCount = [];
    
    foreach ($denominations as $note) {
        if ($amount >= $note) {
            $noteCount[$note] = intdiv($amount, $note);
            $amount %= $note;
        }
    }
    
    return $noteCount;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Minimum Currency Notes</title>
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
        <h2>Minimum Currency Notes</h2>
        <form method="post">
            <input type="number" name="amount" placeholder="Enter amount" required>
            <br>
            <button type="submit" name="calculate">Calculate</button>
        </form>
        
        <?php
        if (isset($_POST['calculate'])) {
            $amount = $_POST['amount'];
            $notes = minCurrencyNotes($amount);
            
            echo "<h3>Minimum Notes for Rs. $amount:</h3>";
            echo "<ul>";
            foreach ($notes as $note => $count) {
                echo "<li>Rs. $note: $count</li>";
            }
            echo "</ul>";
        }
        ?>
    </div>
</body>
</html>