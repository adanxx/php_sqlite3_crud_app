<?php
 
 include('db.php');


 if(isset($_POST['submit'])){


    $fname = $_POST['txtFname'];
    $lname = $_POST['txtlname'];
    $email = $_POST['email'];

    $query = "INSERT INTO users_table VALUES (NULL,'$fname', '$lname', '$email')";
    
    if($db->exec($query)){
        
        header("Location: index.php");

    }else{
        echo "Error in the query";
    }
    
 }

?>