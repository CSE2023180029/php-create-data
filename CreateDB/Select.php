<?php 
   $servername = "localhost";
   $username = "root";
   $pass = "";
   $dataname = "mydb_1";
   $connect = mysqli_connect($servername, $username, $pass, $dataname);
   if ($connect -> connect_error){
      echo "Connect failed!!";
   }else{
      $query = "SELECT * FROM mydb_1";
         if(mysqli_query($connect, $query)){
            echo $query;
         }else{
            echo "Job";
         }
   }
?>