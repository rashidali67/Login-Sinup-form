<?php 

    
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'loginr');

   //create connection with database and phpmyadmin.
   
   $conn= mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


  //Now check connection 

   if ($conn== false) {
     
       die("invalide: connection fail");
   }
    
    
    


 ?>