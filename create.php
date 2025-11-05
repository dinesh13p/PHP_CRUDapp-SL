<?php
include "dbconnection.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    addRecord();
}

function addRecord(){
    global $conn;

    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];

    $query = "INSERT INTO student (name, email, age, gender, address) 
              VALUES ('$name', '$email', '$age', '$gender', '$address')";

    if ($conn->query($query) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Something went wrong: " . $conn->error;
    }
}
?>

<form method="POST">
    <h1>Add New Student</h1>

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Enter your name" required>
    </div>

    <div class="form-group">
        <label for="age">Age</label>
        <input type="number" name="age" placeholder="Enter your age" required>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Enter your email" required>
    </div>

    <div class="form-group">
        <label>Gender</label>
        <input type="radio" name="gender" value="male" required> Male
        <input type="radio" name="gender" value="female" required> Female
    </div>

    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" name="address" placeholder="Enter your address" required>
    </div>

    <div class="form-group">
        <input type="submit" value="Add Student">
    </div>
</form>