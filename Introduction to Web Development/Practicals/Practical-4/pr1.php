<!DOCTYPE html>
<html>
<head>
    <title>Car Company Lookup</title>
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
        <h2>Car Company Lookup</h2>
        <form method="post">
            <input type="text" name="car_name" required placeholder="Enter Car Name">
            <br>
            <button type="submit" name="search">Find Company</button>
        </form>
        
        <?php
        if (isset($_POST['search'])) {
            $car_name = trim(ucwords(strtolower($_POST['car_name'])));
            
            $car_companies = [
                "Tata" => ["Safari", "Nexon", "Tigor", "Tiago"],
                "Mahindra" => ["XUV700", "XUV300", "Bolero"],
                "Hyundai" => ["i20", "Verna", "Venue", "Creta"],
                "Suzuki" => ["Swift", "Alto", "Baleno", "Brezza"]
            ];
            
            $company_found = "Unknown";
            foreach ($car_companies as $company => $cars) {
                if (in_array($car_name, $cars)) {
                    $company_found = $company;
                    break;
                }
            }
            
            echo "<h3>Car Name: $car_name</h3>";
            echo "<h3>Company: $company_found</h3>";
        }
        ?>
    </div>
</body>
</html>
