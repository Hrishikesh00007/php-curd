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
  <h2>Add New Data</h2>
  
  <form class="form-inline" action="add-new-process.php" method="post" >
  <div class="form-group">
      <label >Name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label >Age:</label>
      <input type="number" class="form-control" id="age" placeholder="Enter age" name="age">
    </div>
    <div class="form-group">
      <label >City:</label>
      <input type="text" class="form-control" id="city" placeholder="Enter city" name="city">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>






</body>
</html>