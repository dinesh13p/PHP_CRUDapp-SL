 <?php
include "dbconnection.php";
function deleteSql($id){
   global $conn;
   $querry = "DELETE FROM student WHERE id = '$id'";
if( $conn->query($querry)==TRUE){
   header("Location:index.php");
}
}
$id = $_GET["id"];

deleteSql($id);
?> 