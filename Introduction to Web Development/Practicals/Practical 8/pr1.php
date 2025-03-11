<html>
<body>
    <h2>Employee Details Form</h2>
    <form method="post">
        Name: <input type="text" name="name"><br>
        DOB: <input type="date" name="dob"><br>
        Address: <textarea name="address"></textarea><br>
        Mobile No: <input type="tel" name="mobile" pattern="[0-9]{10}"><br>
        Gender: <input type="radio" name="gender" value="Male"> Male
                <input type="radio" name="gender" value="Female"> Female<br>
        Email: <input type="email" name="email"><br>
        Password: <input type="password" name="pwd"><br>
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
        // Get form data and sanitize
        $name = htmlspecialchars($_POST['name']);
        $dob = htmlspecialchars($_POST['dob']);
        $address = htmlspecialchars($_POST['address']);
        $mobile = htmlspecialchars($_POST['mobile']);
        $gender = htmlspecialchars($_POST['gender']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['pwd']);
        $dept = htmlspecialchars($_POST['dept']);
        $hobbies = isset($_POST['hobbies']) ? implode(", ", $_POST['hobbies']) : "None";
        $salary = htmlspecialchars($_POST['salary']);
        // Display the submitted details
        echo "<h3>Submitted Employee Details:</h3>";
        echo "Name: $name<br>";
        echo "DOB: $dob<br>";
        echo "Address: $address<br>";
        echo "Mobile No: $mobile<br>";
        echo "Gender: $gender<br>";
        echo "Email: $email<br>";
        echo "Password: $password<br>";
        echo "Department: $dept<br>";
        echo "Hobbies: $hobbies<br>";
        echo "Salary: $salary<br>";
    }
    ?>
</body>
</html>
