<?php 
   $servername = "localhost";
   $username = "root";
   $pass = "";
   $dataname = "mydb_1";
   $connect = mysqli_connect($servername, $username, $pass, $dataname);
   if ($connect -> connect_error){
      echo "Connect failed!!";
   }else{
      
      $query = "CREATE TABLE mytable_1 (id int AUTO_INCREMENT NOT NULL, name VARCHAR (50) NOT NULL, phone VARCHAR (50) NOT NULL, email VARCHAR (50)NOT NULL, address VARCHAR (50)NOT NULL, PRIMARY KEY(id))";
         if(mysqli_query($connect, $query)){
            echo "Database Created!";
         }else{
            echo "Job";
         }
   }
?>