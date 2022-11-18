<?php include "db_connect.php";

//include 'navbar1.php'
include 'nav6.php'
?>

<?php
if (isset($_POST['delete'])) {
    $b_id= $_POST['book_id'];
    $del_res= mysqli_query($conn, "DELETE FROM bookedflights WHERE b_id = '$b_id'");
    if($del_res){
        echo "<script>alert('canceled !!');</script>";
    }
   else{
       echo "<script>alert('flight Canceled !!');</script>";
    }
    echo "<script>window.location.href = 'viewbooked.php';</script>";
}
?>

<!DOCTYPE HTML>
<html>
<head>
<title>View Your Booking Status</title>
<link href="cssbooks/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Flat Cart Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--google fonts-->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script src="jsbooks/jquery-1.11.0.min.js"></script>

<script>$(document).ready(function(c) {
	$('.close').on('click', function(c){
		$('.cake-top').fadeOut('slow', function(c){
	  		$('.cake-top').remove();
		});
	});	  
});
</script>

<style>
	.table, .cart-bottom, .cart-top{
		width: 120%;
	}
</style>

<script>$(document).ready(function(c) {
	$('.close-btm').on('click', function(c){
		$('.cake-bottom').fadeOut('slow', function(c){
	  		$('.cake-bottom').remove();
		});
	});	  
});
</script>
</head>
<body>
<form action="#" method="POST">
<input type="hidden"name="id"value="<?= $row['b_id']?>">
<div class="logo">
	<h3>View Your Booking Status</h3>
</div>
<div class="cart">
   <div class="cart-top">
   	  <div class="cart-experience">
   	  	 <h4>Booking Experiance </h4>
   	  </div>
   	  <div class="cart-login">
   	  	 <div class="cart-login-img">
   	  	 	<img src="imagesbooks/loggin_man.png">
   	  	 </div>
   	  	 <div class="cart-login-text">
   	  	 	<h5>USER</h5>
   	  	 </div> 	
   	  	  <div class="lang_list">
				<select tabindex="4" class="dropdown">
					<option value="" class="label" value="">This is looking great</option>
					<option value="1"></option>
					<option value="2"></option>
					<option value="3"></option>
				</select>
			 </div>  	 
   	  	 <div class="clear"> </div>
   	  </div>
   	 <div class="clear"> </div>
   </div>
   <div class="cart-bottom">
   	 <div class="table">
   	 	<table>
   	 		<tbody>
   	 	      <tr  class="main-heading">	
                  	      	
		 			<th>Airline Name</th>
		 			<th class="long-txt">DepartureLocation</th>
		 			<th class="long-txt">Arrivallocation</th>
		 			<th class="long-txt">Departure date and time</th>
		 			<th class="long-txt">Arrival date and time</th> 		
					 
					 <th class="long-txt">price</th> 	
					 <th class="long-txt">Action</th>
					 			 			
					 			 	
   	 	     </tr>
						
					</thead>
					<tbody>
						<?php
							//$airport = $conn->query("SELECT * FROM airport_list ");
							//while($row = $airport->fetch_assoc()){
								//$aname[$row['id']] = ucwords($row['airport'].', '.$row['location']);
							//}
							$qry = $conn->query("SELECT * FROM bookedflights ");
							while($row = $qry->fetch_assoc()):
								//$booked = $conn->query("SELECT * FROM booked_flight where id = ".$row['id'])->num_rows;

						 ?>
						 <tr>
						 	
						 	
						 	<td class="text-right">
							 <?php echo $row['Airline'] ?></td>
							 <td class="text-right">
							 <?php echo $row['DepartureLocation'] ?></td>
							 <td class="text-right">
							 <?php echo $row['Arrivallocation'] ?></td>
							 <td class="text-right">
							 <?php echo $row['Departuredate'] ?></td>
							 <td class="text-right">
							 <?php echo $row['arrivaldate'] ?></td>
						 		
						 		
						 		
						 		<!--<div class="col-sm-6">-->
								<!-- <p>Airline :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><<?php echo $row['Airline'] ?></b></p>-->
								<!-- <p>Departurelocation:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $row['DepartureLocation'] ?></b></p>-->
								<!-- <p>Arrivallocation:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $row['Arrivallocation'] ?></b></p>-->
						 		<!--<p><small>Location :<b><?php //echo $aname[$row['departure_airport_id']].' - '.$aname[$row['arrival_airport_id']] ?></small></b></p>-->
						 		<!--<p><small>Departuredate and time :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo date('M d,Y h:i A',strtotime($row['Departuredate'])) ?></small></b></p>-->
						 		<!--<p><small>Arrival date and time:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo date('M d,Y h:i A',strtotime($row['arrivaldate'])) ?></small></b></p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
						 		<!--</div>-->
						 	<!--	</div>-->
						 	

						 	<!--<td class="text-right"></td>-->
						 	<td class="text-right"><?php echo number_format($row['price'],2) ?></td>
						 	
							 <td>
						 		
						 		
							<!-- <b><font color="#00000000">
									<a href="delete?id=<?php echo $row['b_id']?>">cancel</a>
								</font></b></td>-->
								<form action="viewbooked.php" method="POST">
									<input type="text" name="book_id" value="<?php echo $row['b_id']; ?>" hidden>
									<input type="submit" name="delete" value="cancel">
								</form>
						 </tr>

						<?php endwhile; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>