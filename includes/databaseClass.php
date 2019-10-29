<?php
   class database{
      // DATABASE CONNECTIVITY.
      public $conn = null;
      function connect(){
          // $this->conn = new MySQLi('Localhost:3306','root','','masenocu');
      
        //  if($this->conn -> connect_error){      
          //   die($this->conn -> connect_error);     
        //  }
         $this->conn = mysqli_connect('localhost','root','','masenocu', '3306') or die("Database connection could not be established.");
      }
   }
?>