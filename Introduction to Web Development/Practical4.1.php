<?php
// Array mapping cars to their respective companies
$carCompanies = [
    "Tata" => ["Safari", "Nexon", "Tigor", "Tiago"],
    "Mahindra" => ["XUV700", "XUV300", "Bolero"],
    "Hyundai" => ["i20", "Verna", "Venue", "Creta"],
    "Suzuki" => ["Swift", "Alto", "Baleno", "Brezza"]
];

// Function to find the company of a given car
function findCarCompany($carName, $carCompanies) {
    foreach ($carCompanies as $company => $cars) {
        if (in_array($carName, $cars)) {
            return $company;
        }
    }
    return "Car not found in the list.";
}

// Get the car name from user input
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $carName = htmlspecialchars(trim($_POST["carName"]));
    $company = findCarCompany($carName, $carCompanies);
    echo "<h2>Car Company: " . $company . "</h2>";
}
?>

<!DOCTYPE html>
<html>
<body>
    <h1>Find the Company of a Car</h1>
    <form method="post">
        <label for="carName">Enter Car Name:</label>
        <input type="text" id="carName" name="carName" required>
        <button type="submit">Find Company</button>
    </form>
</body>
</html>
