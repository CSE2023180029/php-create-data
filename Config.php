<?php
// connection file php
include 'Conection.php';
   // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
  // Ckeck error!
  if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT id, fullname, phone, email FROM tbluser";
  $result = $conn -> query($sql);
    while ($row = $result -> fetch_assoc()){
      echo $row['id'] . "\t" . $row['fullname'] . "\t" . $row['phone'] . "\t" . $row['email'] . "<br>";
    }
?>