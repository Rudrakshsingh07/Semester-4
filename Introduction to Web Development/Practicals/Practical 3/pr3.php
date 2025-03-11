<!DOCTYPE html>
<html>
<head>
    <title>Salary Calculator</title>
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
        <h2>Salary Calculator</h2>
        <form method="post">
            <input type="number" name="basic_salary" required placeholder="Enter Basic Salary">
            <br>
            <button type="submit" name="calculate">Calculate</button>
        </form>
        
        <?php
        if (isset($_POST['calculate'])) {
            $basic_salary = $_POST['basic_salary'];
            
            // Calculate allowances
            $da = 0.50 * $basic_salary;
            $hra = 0.10 * $basic_salary;
            $medical = 0.04 * $basic_salary;
            
            // Calculate Gross Salary
            $gross_salary = $basic_salary + $da + $hra + $medical;
            
            // Calculate deductions
            $insurance = 0.07 * $gross_salary;
            $pf = 0.05 * $gross_salary;
            $deduction = $insurance + $pf;
            
            // Calculate Net Salary
            $net_salary = $gross_salary - $deduction;
            
            echo "<h3>Salary Breakdown:</h3>";
            echo "<p><strong>Basic Pay:</strong> $basic_salary</p>";
            echo "<p><strong>DA:</strong> $da</p>";
            echo "<p><strong>HRA:</strong> $hra</p>";
            echo "<p><strong>Medical:</strong> $medical</p>";
            echo "<p><strong>Gross Salary:</strong> $gross_salary</p>";
            echo "<p><strong>Insurance:</strong> $insurance</p>";
            echo "<p><strong>PF:</strong> $pf</p>";
            echo "<p><strong>Total Deduction:</strong> $deduction</p>";
            echo "<h3><strong>Net Salary:</strong> $net_salary</h3>";
        }
        ?>
    </div>
</body>
</html>
