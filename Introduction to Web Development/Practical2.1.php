<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Form</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 20px;
        }
        input, button {
            padding: 10px;
            margin-bottom: 15px;
            width: 100%;
            max-width: 300px;
        }
        button {
            font-weight: bold;
            color: white;
            background-color: #171717;
            border: none;
            border-radius: .6rem;
            cursor: pointer;
        }
        .output {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            max-width: 400px;
        }
    </style>
</head>
<body>
    <h1>User Information Form</h1>
    <form method="POST">
        <input type="text" name="name" placeholder="Enter your Full Name" required><br>
        <input type="text" name="dept" placeholder="Enter Department"><br>
        <input type="text" name="address" placeholder="Enter your Address" required><br>
        <input type="number" name="age" placeholder="Enter your Age" required><br>
        <button type="submit">Submit</button>
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <div class="output">
            <h2>User Information</h2>
            <p><strong>Name:</strong> <?php echo htmlspecialchars($_POST['name']); ?></p>
            <p><strong>Department:</strong> <?php echo htmlspecialchars($_POST['dept']); ?></p>
            <p><strong>Address:</strong> <?php echo htmlspecialchars($_POST['address']); ?></p>
            <p><strong>Age:</strong> <?php echo htmlspecialchars($_POST['age']); ?></p>
        </div>
    <?php endif; ?>
</body>
</html>