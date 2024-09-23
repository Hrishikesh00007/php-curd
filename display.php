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

<?php

include ('connection.php');

$sql= "SELECT * FROM `newtest`";
$result= mysqli_query($con,$sql);

?>

<div class="container mt-3">
  <h2>List Of Data</h2>
  <button type="button" class="btn btn-success" ><a href="add-new-data.php" sty >Add New Data</a></button>

  <table class="table">
    <thead>
      <tr>
      <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>City</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>

    <?php 
    
    while($row=mysqli_fetch_assoc($result)){
    
    ?>

      <tr>
      <td><?=$row['id']?></td>
        <td><?=$row['name']?></td>
        <td><?=$row['email']?></td>
        <td><?=$row['age']?></td>
        <td><?=$row['city']?></td>
        <td><button type="button" class="btn btn-warning"><a href='update.php?updateid=<?=$row['id']?>'>Update</a></button></td>
        <td><button type="button" class="btn btn-danger"><a href='delete.php?deleteid=<?=$row['id']?>'> Delete</a></button></td>
      </tr>

      <?php } ?>
    </tbody>
  </table>

</div>

    
</body>
</html>