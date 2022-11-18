<?php

include ('db_connect.php');

?>
<?php

if (isset($_POST['sub'])) {
   $id = $_POST['id'];
   $Airline = $_POST['Airline'];
   $flightNo = $_POST['flightNo'];
   $DepartureLocation = $_POST['DepartureLocation'];
   $Arrivallocation = $_POST['Arrivallocation'];
   $Departuredate = $_POST['Departuredate'];
   $arrivaldate = $_POST['arrivaldate'];
   $seats = $_POST['seats'];
   $price = $_POST['price'];
   
   $query="UPDATE flights_tb SET Airline='$Airline',flightNo='$flightNo',DepartureLocation='$DepartureLocation',Arrivallocation='$Arrivallocation',Departuredate='$Departuredate',arrivaldate='$arrivaldate',seats='$seats',price='$price'  where id='$id'";
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
        $query=mysqli_query($conn,"select * from flights_tb where id='$id'");
        while($row=mysqli_fetch_array($query))
      {
      
      ?>
      <html>
         <body>
            <form action="#" method="POST">
      
    <input type="hidden"name="id"value="<?= $row['id']?>">
       <div class="inputfield">
          <label>Airline</label>
          <input type="text" class="input" name="Airline" placeholder="Airline" value="<?= $row['Airline'] ?>" required>
       </div>   
       <div class="inputfield">
        <label>flightNo</label>
        <input type="text" class="input" name="flightNo" placeholder="flightNo" value="<?= $row['flightNo'] ?>" required>
     </div> 
     <div class="inputfield">
        <label>DepartureLocation</label>
        <input type="text" class="input" name="DepartureLocation" placeholder="DepartureLocation" value="<?= $row['DepartureLocation'] ?>" required>
     </div> 
     <div class="inputfield">
        <label>Arrivallocation</label>
        <input type="text" class="input" name="Arrivallocation" placeholder="Arrivallocation" value="<?= $row['Arrivallocation'] ?>" required>
     </div> 
       <div class="inputfield">
          <label>Departuredate and time</label>
          <input type="text" class="input" name="Departuredate" placeholder="Date" value="<?= $row['Departuredate']  ?>" required>
       </div>  
       <div class="inputfield">
          <label>Arrival date and time</label>
          <input type="text" class="input" name="arrivaldate" placeholder="Date" value="<?= $row['arrivaldate'] ?>" required>
       </div>  
      
      <div class="inputfield">
          <label>seats</label>
          <input type="text" class="input" name="seats" placeholder="seats" value="<?= $row['seats'] ?>" required>
       </div> 
       <div class="inputfield">
        <label>price</label>
        <input type="text" class="input" name="price" placeholder="price" value="<?= $row['price'] ?>" required>
     </div> 
      <div class="inputfield">
        <input type="submit" value="submit" name="sub" class="btn">
      </div>
    </div>
    <?php }} ?>
   
</div>
</form>
</body>
