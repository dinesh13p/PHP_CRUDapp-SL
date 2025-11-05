<?php  
 
 session_start();
  
 if($_SESSION['isLoggedIn'] = false){
    header('Location: login.php');
 }

$sql_query = "SELECT * FROM student;";

$result = $conn->query($sql_query);

 if (mysqli_num_rows ) {
    # code...
 }

 session_destroy();

 header('Location:login.php');


 
 ?>