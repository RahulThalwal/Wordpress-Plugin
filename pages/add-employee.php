<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Employee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

 
</head>
<body>
 
<div class="container">
  <h2>Add Employee</h2>
 <div class="row">
  <div class="col-sm-8">
  <div class="panel panel-primary">
    <div class="panel-heading">Add Employee</div>
    <div class="panel-body">
    <form action="/action_page.php">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="PhoneNo">PhoneNo:</label>
      <input type="text" class="form-control" id="text" placeholder="Enter Phone Number" name="phoneNo">
    </div>

    <div class="form-group">
      <label for="gender">Gender:</label>
      <select name="gender" id="gender" class="form-control">
      <option value="male">Male</option>
      <option value="female">female</option>
      <option value="other">other</option>
      </select>
    </div>

    <div class="form-group">
      <label for="pwd">Designation:</label>
      <input type="text" class="form-control" id="Designation" placeholder="Enter Designation" name="Designation">
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
  </form>
    </div>
  </div>
 </div>
  </div>
</div>

<script src="<?php echo EMS_PLUGIN_URL ?>js/jquery.min.js"></script>
<script src="<?php echo EMS_PLUGIN_URL ?>js/bootstrap.min.js"></script>



</body>
</html>
