<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
   


<div class="container">
  <h2>Update Data</h2>
  
<?php

include ("connection.php");

$sql=("SELECT * FROM `newtest` WHERE `id`='".$_GET['updateid']."' ");
$result= mysqli_query($con,$sql);

while($row=mysqli_fetch_assoc($result)) {

?>


  <form class="form-inline" action="update-process.php?updateid=<?=$row['id']?>" method="post" >
  <div class="form-group">
      <label >Name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value=<?=$row['name']?>>
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value=<?=$row['email']?>>
    </div>
    <div class="form-group">
      <label >Age:</label>
      <input type="number" class="form-control" id="age" placeholder="Enter age" name="age" value=<?=$row['age']?>>
    </div>
    <div class="form-group">
      <label >City:</label>
      <input type="text" class="form-control" id="city" placeholder="Enter city" name="city" value=<?=$row['city']?>>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>


<?php } ?>



</body>
</html>