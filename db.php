<?php
        // print_r(PDO::getAvailableDrivers()); // returns an array of PDO-drivers
  try{
       $db = new SQLite3('user.db');
    
     $query = "CREATE TABLE IF NOT EXISTS users_table(id integer primary key, firstName text, lastName text, email text)";
     $db ->exec($query);

    
    }catch (Execption $e){
        echo "Error in database" . $e->getMessage();
    }
   
?>