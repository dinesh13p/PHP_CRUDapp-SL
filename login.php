<?php
    $correct__username = "root";
    $correct_password = "Nepal123";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $input_username = $_POST['username'];
        $input_password = $_POST['password'];

        if($input_username == $correct__username && $input_password == $correct_password){
            // login successful
            session_start();
            $_SESSION["isLoggedIn"] = true;

            header("Location: index.php");
        }else{
            $error = "username or password do not match";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            background-color: #f4f6f8;
            font-family: Arial, sans-serif;
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
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 300px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 100%;
            background-color: #3498db;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <form method="POST">
        <div class="form-group">
            <label for="username">UserName</label>
            <input type="text" placeholder="UserName" name="username" id="username">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" placeholder="Password" name="password" id="password">
        </div>


        <div class="form-group">
            <label for="password">Remember me!</label>
            <input type="checkbox" >
        </div>

        <button type="submit" class="btn btn-login">Login</button>
        <?php
        if(isset($error) && $error != ""){
            echo '
            <div class="error">
                '.$error.'
            </div>
            ';  
        }
        ?>
    </form>
</body>
</html>
