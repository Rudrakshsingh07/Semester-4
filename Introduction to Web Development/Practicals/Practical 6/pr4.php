<?php
function displayDateTimeFormats() {
    return [
        'Y-m-d H:i:s' => date("Y-m-d H:i:s"),
        'd-m-Y' => date("d-m-Y"),
        'm/d/Y' => date("m/d/Y"),
        'l, F j, Y' => date("l, F j, Y"),
        'h:i A' => date("h:i A"),
    ];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Current Date & Time</title>
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
    </style>
</head>
<body>
    <div class="container">
        <h2>Current Date & Time</h2>
        <?php
            $dateTimeFormats = displayDateTimeFormats();
            foreach ($dateTimeFormats as $format => $value) {
                echo "<p><strong>$format:</strong> $value</p>";
            }
        ?>
    </div>
</body>
</html>