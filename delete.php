<?php
 include_once('db.php');

 $userID = $_GET['id'];  // Let we will use the get-request to get the id from from url via link


 $query = "DELETE FROM users_table WHERE id='$userID'";
 
 if($db->exec($query)){
     header('Location: index.php');

    // echo "Record is delete by id: " . $userID;

 }else {
     echo "Error in delete query";
 }




?>
