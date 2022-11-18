<?php

include ('db_connect.php');
include 'nav6.php'

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
  
   
   $query="UPDATE users SET fullname='$fullname',password='$password',email='$email',gender='$gender',nationality='$nationality',phone='$phone' where id='$id'";
$query_run=mysqli_query($conn,$query);
if($query_run)
{
   // $_SESSION['status'] = "Category updated successfully";
   echo "updated successfully";
    header('location:flight.php');
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
       <!--  <link rel="stylesheet" href="styleupdate.css">-->
         
        <!-- <nav class="navbar header-nav navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Update flight Details</a>

            
            <a id="register" href="index.php?page=manage_flight1">Home</a>
        </div>
    </nav>-->
         
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
          <label>Fullname</label>
          <input type="text" class="input" name="fullname" placeholder="Airline" value="<?= $row['fullname'] ?>" required>
       </div>   
       <div class="inputfield">
        <label>Password</label>
        <input type="password" class="input" name="password" placeholder="password" value="<?= $row['password'] ?>" required>
     </div> 
     <div class="inputfield">
        <label>Email</label>
        <input type="text" class="input" name="email" placeholder="email" value="<?= $row['email'] ?>" required>
     </div> 
     <div class="inputfield">
        <label>Gender</label>
        <input type="text" class="input" name="gender" placeholder="gender" value="<?= $row['gender'] ?>" required>
     </div> 
       <div class="inputfield">
          <label>Nationality</label>
          <input type="text" class="input" name="nationality" placeholder="nationality" value="<?= $row['nationality']  ?>" required>
       </div>  
       <div class="inputfield">
          <label>Phone</label>
          <input type="text" class="input" name="phone" placeholder="phone" value="<?= $row['phone'] ?>" required>
       </div>  
      
      
      <div class="inputfield">
        <input type="submit" value="submit" name="sub" class="btn">
      </div>
    </div>
    <?php }} ?>
   
</div>
</form>
</body>
