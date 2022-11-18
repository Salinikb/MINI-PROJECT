<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include "db_connect.php";
include 'nav6.php'
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Booking your flight</title>
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
<div class="logo">
	<h3>Book your ticket</h3>
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
   	  	 	<h5>Logged in as</h5>
   	  	 </div> 	
   	  	  <div class="lang_list">
				<select tabindex="4" class="dropdown">
					<option value="" class="label" value="">This is looking great</option>
					<option value="1">Many variations</option>
					<option value="2">Ipsum is simply</option>
					<option value="3">Nemo enim ipsam</option>
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
                  	      	<th>Airline</th>
		 			<th>Airline Name</th>
		 			<th class="long-txt">DepartureLocation</th>
		 			<th class="long-txt">Arrivallocation</th>
		 			<th class="long-txt">Departure date and time</th>
		 			<th class="long-txt">Arrival date and time</th> 		
					 
					 <th class="long-txt">price</th> 	
					 
					 			 			
					 			 	
   	 	     </tr>
				 <?php
				 //$airport = $conn->query("SELECT * FROM airport_list ");
				 //while($row = $airport->fetch_assoc()){
					 //$aname[$row['id']] = ucwords($row['airport'].', '.$row['location']);
				 //}
				 $qry = $conn->query("SELECT * FROM flights_tb  ");
				 while($row = $qry->fetch_assoc()):
					 //$booked = $conn->query("SELECT * FROM booked_flight where id = ".$row['id'])->num_rows;

			  ?>
   	 	     <tr class="cake-top">
                 <td class="cakes">	 	     	  
   	 	     		<div class="product-img">
   	 	     			<img src="imagesbooks/t1.jpg">
   	 	     		</div>
   	 	        </td>

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
                             
                             <td class="text-right">
							 <?php echo $row['price'] ?></td>
                             <td>
						 		
						 		
								 </b></td>
								 
								
						 		
                                <td class="btm-remove">
   	 	     		
   	 	     		<div class="close-btm">
   	 	     	 <a href="book.php?id=<?php echo $row['id']?>"> <h5>Book your seats</h5>
   	 	        </div>
   	 	     	</td>
   	 	     	
								 
								  </div>
								  </div>
 
							

						 </tr>

						<?php endwhile; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
   	 	     	<td class="cakes">	 	  
					   	  
   	 	     		<!--<div class="product-img">
   	 	     			<img src="images/cack1.png">
   	 	     		</div>-->
   	 	        </td>
   	 	        