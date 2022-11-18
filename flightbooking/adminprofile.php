<?php

include ('db_connect.php');

?>
<?php

if (isset($_POST['sub'])) {
   $id = $_POST['id'];
   $Airline = $_POST['fullname'];
   $flightNo = $_POST['password'];
   $DepartureLocation = $_POST['email'];
   $Arrivallocation = $_POST['gender'];
   $Departuredate = $_POST['nationality'];
   $arrivaldate = $_POST['phone'];
   
   
   $query="UPDATE users SET fullname='$fullname',password='$password',email='$email',gender='$gender',nationality='$nationality',phone='$phone'  where id='$id'";
$query_run=mysqli_query($conn,$query);
if($query_run)
{
   // $_SESSION['status'] = "Category updated successfully";
   echo "updated successfully";
    header('location:index.php?page=manage_flight1');
}
else
{
    echo "no";
}
}

?>
   
<style>


body{
      
      
    background: url(../pictures/t2.jpg) no-repeat center;
    

        

        
        
  }
	</style>


             
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
         <link rel="stylesheet" href="styleupdate.css">
         
         <nav class="navbar header-nav navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Update flight Details</a>

            
            <a id="register" href="index.php?page=manage_flight1">Home</a>
        </div>
    </nav>
         
		</head>   
                        <div class="wrapper">
    <div class="title">
    <link rel="stylesheet" href="css/style.css">
   
    </div>
   
    <div class="form">
      <?php
      if(isset($_GET['id']))
      {
        $id=$_GET['id'];
        $query=mysqli_query($conn,"select * from users where id='$id'");
        while($row=mysqli_fetch_array($query))
      {
      
      ?>
      <html>
         <body>
            <form action="#" method="POST">
      
    <input type="hidden"name="id"value="<?= $row['id']?>">
       <div class="inputfield">
          <label>fullname</label>
          <input type="text" class="input" name="Airline" placeholder="Airline" value="<?= $row['Airline'] ?>" required>
       </div>   
       <div class="inputfield">
        <label>password</label>
        <input type="password" class="input" name="flightNo" placeholder="flightNo" value="<?= $row['flightNo'] ?>" required>
     </div> 
     <div class="inputfield">
        <label>email</label>
        <input type="text" class="input" name="DepartureLocation" placeholder="DepartureLocation" value="<?= $row['DepartureLocation'] ?>" required>
     </div> 
     <div class="inputfield">
        <label>gender</label>
        <input type="text" class="input" name="Arrivallocation" placeholder="Arrivallocation" value="<?= $row['Arrivallocation'] ?>" required>
     </div> 
       <div class="inputfield">
          <label>nationality</label>
          <input type="text" class="input" name="Departuredate" placeholder="Date" value="<?= $row['Departuredate']  ?>" required>
       </div>  
       <div class="inputfield">
          <label>phone</label>
          <input type="text" class="input" name="arrivaldate" placeholder="Date" value="<?= $row['arrivaldate'] ?>" required>
       </div>  
      
     
      <div class="inputfield">
        <input type="submit" value="submit" name="sub" class="btn">
      </div>
    </div>
    <?php }} ?>
   
</div>
</form>
</body>
