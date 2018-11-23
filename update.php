<?php

 try{
    
    include('db.php');

        
        if(isset($_GET['id']) && !empty($_GET['id'])){
        
            $id = $_GET['id'];
   
            $query = "SELECT * FROM users_table WHERE id='$id'";
            $res   = $db->query($query);
        }

        if(isset($_POST['update_btn'])){

            $id = $_GET['id'];

            $fname = $_POST['txtFname'];
            $lname = $_POST['txtlname'];
            $email = $_POST['email'];

            $query = "UPDATE users_table SET firstName='$fname',lastName='$lname', email='$email' WHERE id='$id'";
            
            if($db->exec($query)){
                header('Location: index.php');
            }else{
               echo "Error_: query in update";
            }
   
        }

    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD::UPDATE</title>
      <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
 

  <div style="width:40%; margin: 5% auto; color:#fff;">
        <div class="container bg-secondary" style="padding: 20px 20px;">
            <h5 class="text-center"> UPDATE USER DETAILS </h5>
            <div class="row"> 
                <div class="col-md-12">
                <?php while($row = $res->fetchArray()){  ?>
                <form action="update.php?id=<?php echo $row['id'] ?>" method="POST">
                    <div class="form-group">
                       <label for="firstname">First-Name:</label>
                       <input type="text" class="form-control" id="lname" name="txtFname" placeholder="Enter firstname..."
                         value="<?php echo $row['firstName'] ?>" required>
                    </div>
                    <div class="form-group">
                       <label for="lastname">Last-Name :</label>
                       <input type="text" class="form-control" id="fname" name="txtlname"  placeholder="Enter lastname..." 
                       value="<?php echo $row['lastName'] ?>"required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email..." 
                        value="<?php echo $row['email'] ?>" required>
                    </div>
                <?php } ?>
                    <div align="center">
                        <button type="submit" class="btn btn-primary" name="update_btn">UPDATE</button>
                    </div> 
                </form>
                </div>
            </div>
        </div>
  </div>






 <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>      
</body>
</html>