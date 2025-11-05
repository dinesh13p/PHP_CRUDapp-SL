<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input[type="text"],
        input[type="number"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .gender-options {
            display: flex;
            gap: 15px;
            margin-top: 5px;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form action="formhandle.php" method="POST">
        <h1>Form</h1>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Enter your name"/>
        </div>

        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" placeholder="Enter your age"/>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Enter your email"/>
        </div>

        <div class="form-group">
            <label>Gender</label>
            <div class="gender-options">
                <label><input type="radio" name="gender" value="male"/>Male</label>
                <label><input type="radio" name="gender" value="female"/>Female</label>
            </div>
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" placeholder="Enter your Address"/>
        </div>

        <div class="form-group">
            <input type="submit" value="Submit"/>
        </div>
    </form>
</body>
</html>
