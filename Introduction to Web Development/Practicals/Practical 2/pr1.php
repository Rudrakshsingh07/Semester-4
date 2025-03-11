<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Form</title>
    <!-- <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        .container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 2px 2px 12px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }
        button {
            margin-top: 15px;
            padding: 10px;
            width: 100%;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        #output {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            display: none;
        }
    </style> -->
</head>
<body>
    <div class="container">
        <h2>User Information</h2>
        <form id="userForm">
            <label for="name">Name:</label>
            <input type="text" id="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" required>
            
            <label for="age">Age:</label>
            <input type="number" id="age" required>
            
            <button type="button" onclick="displayInfo()">Submit</button>
        </form>
        
        <div id="output"></div>
    </div>
    
    <script>
        function displayInfo() {
            let name = document.getElementById("name").value;
            let email = document.getElementById("email").value;
            let age = document.getElementById("age").value;
            
            if (name && email && age) {
                let outputDiv = document.getElementById("output");
                outputDiv.style.display = "block";
                outputDiv.innerHTML = `<h3>Submitted Information:</h3>
                                      <p><strong>Name:</strong> ${name}</p>
                                      <p><strong>Email:</strong> ${email}</p>
                                      <p><strong>Age:</strong> ${age}</p>`;
            }
        }
    </script>
</body>
</html>
