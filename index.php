<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD::VIEW</title>
    <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

</head>
<body>

<?php
  include('db.php');

  $query = "SELECT * FROM users_table";

  $result = $db->query($query);

  //  while($row = $result->fetchArray()){
  //      echo "<pre>";
  //      print_r($row);
  //      echo"</pre>";
  //  }
?>

<div class="container bg-info">
    <div class="row" style="margin-top:20px; padding: 20px; 0">
       
      <div class="col-md-4">

      <form action="insert.php" method="POST">
        <div class="form-group">
          <label for="firstname">First-Name:</label>
          <input type="text" class="form-control" id="lname" name="txtFname" placeholder="Enter firstname..." required>
        </div>
        <div class="form-group">
          <label for="lastname">Last-Name :</label>
          <input type="text" class="form-control" id="fname" name="txtlname"  placeholder="Enter lastname..." required>
        </div>
        <div class="form-group">
          <label for="email">Email Address:</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email..." required>
        </div>
        <div align="center">
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div> 
      </form>
       
      </div>
       <div class="col-md-8">
        <h5 class="text-center" style="margin-bottom:10px;">The List Of User in Sqlite Database</h5>         
          <table class="table table-hover" style="background:#fff;">
            <thead >
              <tr>
                <th>#</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
            <?php while($row = $result->fetchArray()) {?>
            
              <th><?php echo $row['id'] ?></th>
              <th><?php echo $row['firstName'] ?></th>
              <th><?php echo $row['lastName'] ?></th>
              <th><?php echo $row['email'] ?></th>
              <th>
              <a href="update.php?id=<?php echo $row['id'] ;?>" class="btn btn-primary" role="button">Edit</a>
              <a href="delete.php?id=<?php echo $row['id'] ;?>" class="btn btn-danger" role="button">Delete</a>
              
              </th>
            </tbody>
            <?php }?>
          </table>
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