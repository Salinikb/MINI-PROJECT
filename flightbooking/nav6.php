
<?php
	session_start();
  

  if(!isset($_SESSION['sess_id'])){

    header('location:index1.php');
  }
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Willfly</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="asyourneed.php">Home</a></li>
      <li><a href="viewbooked.php">Viewbooking status</a></li>
      <li><a href="myprofile.php?id=<?php echo $_SESSION['sess_id']?>">View profile</a></li>
      <li><a href="bookyours.php">View All flights</a></li>
      <li><a href="preferedbooked.php">Bookings</a></li>
      <li><a href="seats.php">View seating arrangements</a></li>
     
      <li><a href="logout.php">Logout</a></li>
    </ul>
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" id="datatable-search-input" placeholder="Search" name="search">
        <label class="form-label" for="datatable-search-input"></label>
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
            
          </button>
        </div>
      </div>
    </form>
  </div>
</nav>


<!--</body>
</html>

<div class="form-outline mb-4">
  <input type="search" class="form-control" id="datatable-search-input">
  <label class="form-label" for="datatable-search-input">Search</label>
</div>
<div id="datatable">
</div>-->