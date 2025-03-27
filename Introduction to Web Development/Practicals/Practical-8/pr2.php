<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Details Form</title>
</head>
<body>
    <h2>Employee Details Form</h2>

    <form method="post">
        Name: <input type="text" name="name"  ><br>
        DOB: <input type="date" name="dob"  ><br>
        Address: <textarea name="address"  ></textarea><br>
        Mobile No: <input type="tel" name="mobile" pattern="[0-9]{10}"  ><br>
        Gender: <input type="radio" name="gender" value="Male"> Male
                <input type="radio" name="gender" value="Female"> Female<br>
        Email: <input type="email" name="email"><br>
        Password: <input type="password" name="pwd"  ><br>
        Department: <select name="dept"  >
            <option value="HR">HR</option>
            <option value="IT">IT</option>
            <option value="Finance">Finance</option>
            <option value="Marketing">Marketing</option>
        </select><br>
        Hobbies: <input type="checkbox" name="hobbies[]" value="Reading"> Reading
                 <input type="checkbox" name="hobbies[]" value="Sports"> Sports
                 <input type="checkbox" name="hobbies[]" value="Music"> Music<br>
        Salary: <input type="number" name="salary"  ><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Define regular expressions for validation
        $namePattern = "/^[a-zA-Z ]+$/";
        $mobilePattern = "/^[0-9]{10}$/";

        // Validate Name
        if (!preg_match($namePattern, $_POST['name'])) {
            echo "Invalid Name: Only letters and spaces are allowed.<br>";
        } else {
            $name = htmlspecialchars($_POST['name']);
        }


        // Validate other fields
        $dob = htmlspecialchars($_POST['dob']);
        $address = htmlspecialchars($_POST['address']);
        $gender = htmlspecialchars($_POST['gender']);
        $salary = htmlspecialchars($_POST['salary']);

        // Display the submitted details if everything is valid
        if (isset($name) && isset($mobile) && isset($email) && isset($password)) {
            echo "<h3>Submitted Employee Details:</h3>";
            echo "Name: $name<br>";
            echo "DOB: $dob<br>";
            echo "Address: $address<br>";
            echo "Gender: $gender<br>";
            echo "Salary: $salary<br>";
        }
    }
    ?>
</body>
</html>
