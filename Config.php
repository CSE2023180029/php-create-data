<?php
// connection file php
include 'Conection.php';
   // Create connection
  $conn = new mysqli($servername, $username, $password, $database);
  // Ckeck error!
  if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
  }else{
    echo 'Connect successfully!';
    $sql = "SELECT id, fullname, phone, email FROM tbluser";
    $result = $conn -> query($sql);
      while ($row = $result -> fetch_assoc()){
        echo $row['id'] . "\t" . $row['fullname'] . "\t" . $row['phone'] . "\t" . $row['email'] . "<br>";
      }
  }
?>


<!-- <!DOCTYPE html>
<html>
  <head>
    <style>
  table, th, td {
    border:1px solid black;
  }
  </style>
  </head>
<body>

<h2>A basic HTML table</h2>

<table style="width:100%">
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
</table>
</body>
</html>
-->
