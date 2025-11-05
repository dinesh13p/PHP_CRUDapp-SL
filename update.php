<?php
include "dbconnection.php";

$id = $_GET["id"];
$currentRecord = findById($id);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    updateRecord($id);
}

function findById($id){
    global $conn;
    $query = "SELECT * FROM student WHERE id = $id";  
    $result = $conn->query($query);
    if ($result && $result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        echo "No student found.";
        exit();
    }
}

function updateRecord($id){
    global $conn;
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];

    $query = "UPDATE student 
              SET name='$name', email='$email', age='$age', gender='$gender', address='$address' 
              WHERE id='$id'";

    if ($conn->query($query) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo 'Something went wrong: ' . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Student</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            width: 400px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"],
        input[type="number"],
        input[type="email"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        input[type="radio"] {
            margin-right: 5px;
        }
        .form-group input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }
        .form-group input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<form method="POST">
    <h1>Student Update Form</h1>

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Enter your name"
               value="<?php echo htmlspecialchars($currentRecord['name']); ?>">
    </div>

    <div class="form-group">
        <label for="age">Age</label>
        <input type="number" name="age" placeholder="Enter your age"
               value="<?php echo htmlspecialchars($currentRecord['age']); ?>">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Enter your email"
               value="<?php echo htmlspecialchars($currentRecord['email']); ?>">
    </div>

    <div class="form-group">
        <label>Gender</label>
        <div>
            <input type="radio" name="gender" value="male"
                   <?php echo ($currentRecord['gender'] == 'male') ? 'checked' : ''; ?>>Male
            <input type="radio" name="gender" value="female"
                   <?php echo ($currentRecord['gender'] == 'female') ? 'checked' : ''; ?>>Female
        </div>
    </div>

    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" name="address" placeholder="Enter your address"
               value="<?php echo htmlspecialchars($currentRecord['address']); ?>">
    </div>

    <div class="form-group">
        <input type="submit" value="Update">
    </div>
</form>

</body>
</html>
