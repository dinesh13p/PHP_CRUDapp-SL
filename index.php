<?php
include "dbconnection.php";

$sql_query = "SELECT * FROM student;";

$result = $conn->query($sql_query);

if (mysqli_num_rows($result) > 0) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Records</title>
  <style>
    body {
      margin: 20px;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f4f7f8;
    }
    .btn-add {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin-bottom: 20px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .btn-add a {
      color: white;
      text-decoration: none;
    }
    .btn-add:hover {
      background-color: #45a049;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      background: #fff;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      overflow: hidden;
    }
    th, td {
      padding: 12px 15px;
      text-align: center;
      border-bottom: 1px solid #ddd;
    }
    th {
      background-color: #4CAF50;
      color: white;
    }
    tr:hover {
      background-color: #f1f1f1;
    }
    td a {
      text-decoration: none;
      padding: 5px 10px;
      border-radius: 4px;
      margin: 0 5px;
      color: white;
      font-size: 14px;
    }
    td a:nth-child(1) { /* DELETE button */
      background-color: #e74c3c;
    }
    td a:nth-child(1):hover {
      background-color: #c0392b;
    }
    td a:nth-child(2) { /* UPDATE button */
      background-color: #3498db;
    }
    td a:nth-child(2):hover {
      background-color: #2980b9;
    }
    h3 {
      text-align: center;
      color: #888;
    }
  </style>
</head>
<body>  

  <button class="btn-add">
    <a href="/crud_operation/create.php">Add New</a>
  </button>   


  <button class="btn-add">
    <a href="/crud_operation/logout.php">Log Out</a>
  </button>   
  <table>
    <tr>
      <th>S.N</th>
      <th>Name</th>
      <th>Age</th>
      <th>Email</th>
      <th>Gender</th>
      <th>Address</th>
      <th>Actions</th>
    </tr>

  <?php
  $index = 1;
  while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' . $index . '</td>'; // Use serial number instead of ID
    echo '<td>' . $row['name'] . '</td>';
    echo '<td>' . $row['age'] . '</td>';
    echo '<td>' . $row['email'] . '</td>';
    echo '<td>' . $row['gender'] . '</td>';
    echo '<td>' . $row['address'] . '</td>';
    echo '<td>
      <a href="/crud_operation/delete.php?id=' . $row["id"] . '">DELETE</a> 
      <a href="/crud_operation/update.php?id=' . $row["id"] . '">UPDATE</a>
    </td>';
    echo '</tr>';
    $index++;
  }
  ?>

  </table>

<?php
} else {
  echo "<h3>No records found</h3>";
}
?>
</body>
</html>
