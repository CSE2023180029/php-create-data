<?php 
   $servername = "localhost";
   $username = "root";
   $pass = "";

   $connect = mysqli_connect($servername, $username, $pass);
   if ($connect -> connect_error){
      echo "Connect failed!!";
   }else{
      echo "Connect!";
      $query = ("CREATE TABLE mydb_1");
      if(mysqli_query($connect, $query)){
         echo "Database Created!";
      }
   }
?>