<?php
require("./dbconnection.php");

// if(isset($_POST)){
// $name=$_POST["name"];
// $address=$_POST["address"];
// $email=$_POST["email"];
// $age=$_POST["age"];
// $gender=$_POST["gender"];
// }
if($_SERVER['REQUEST_METHOD']==='POST'){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];

    create($conn,$name, $age, $email, $gender, $address);
}
function create($conn,$name, $age, $email, $gender, $address)
{
    $query = "INSERT INTO student(`name`, `age`, `email`, `gender`, `address`) 
          VALUES ('$name', '$age', '$email', '$gender', '$address')";

   if(!$conn->query($query)){
    echo "Error : " . $conn->error;
   }else{
    header("Location: index.php");
   }
}   
?>

<table border="1px">
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Address</th>
    </tr>
    <tr>
        <td><?php echo $name; ?></td>
        <td><?php echo $age; ?></td>
        <td><?php echo $email; ?></td>
        <td><?php echo $gender; ?></td>
        <td><?php echo $address; ?></td>
    </tr>
</table>