<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
include "db_connect.php";
include 'nav6.php';
?>

<?php
if(isset($_POST["submit"])){
	$from=$_POST["from"];
	
	$to=$_POST["to"];
	
	$preferedairline=$_POST["preferedairline"];
    $preferedseating=$_POST["preferedseating"];
    $Departuredate=$_POST["Departuredate"];
    $Departuretime=$_POST["Departuretime"];
    $adult=$_POST["adult"];
    $children=$_POST["children"];
    $infant=$_POST["infant"];
	$oneorround=$_POST["oneorround"];
	
	//$image=$_FILES["image"]["name"];
	//move_uploaded_file($_FILES["image"]["tmp_name"],"pictures/".$image);
	mysqli_query($conn,"INSERT INTO `bookasyour_tb`(`from`, `to`, `preferedairline`, `preferedseating`, `Departuredate`, `Departuretime`, `adult`, `children`,`infant`,`oneorround`) VALUES ('$from','$to','$preferedairline','$preferedseating','$Departuredate','$Departuretime','$adult','$children','$infant','$oneorround')");
	echo "<script language='javascript'>";
	echo 'window.location.href = "viewbooked.php";';
	echo "alert('flight details added succefully')";
	
	echo "</script>";
	
}
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Book As Your Need</title>
	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Airline Booking Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tags -->
	<!-- Stylesheet -->
	<link href="asyourcss/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
	<link rel="stylesheet" href="asyourcss/jquery-ui.css" />
	<link href="asyourcss/style.css" rel='stylesheet' type='text/css' />
	<!-- //Stylesheet -->
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
	<!--//fonts-->
</head>

<body>
	<!--background-->
	<h1>Book As Your Need</h1>
	<div class="booking-form-w3layouts">
		<!-- Form starts here -->
		<form action="#" method="post">
			<h2 class="sub-heading-agileits">Booking Details</h2>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<select class="form-control" name="from" id="from" >
						
				

										<option>From</option required>
										<option value="DELHI-INDIRA GANDHI INTERNATIONAL AIRPORT(DEL)">DELHI-INDIRA GANDHI INTERNATIONAL AIRPORT(DEL)</option>

										<option value="CHENNAI-CHENNAI INTERNATIONAL AIRPORT(MAA)">CHENNAI-CHENNAI INTERNATIONAL AIRPORT(MAA)</option>
										
										<option value="GOA-INTERNATIONAL AIRPORT(GOI)">GOA-INTERNATIONAL AIRPORT(GOI)</option>
										<option value="PUNE-INTERNATIONAL AIRPORT(PNQ)">PUNE-INTERNATIONAL AIRPORT(PNQ)</option>
										<option value="JAIPUR-INTERNATIONAL AIRPORT(JAI)">JAIPUR-INTERNATIONAL AIRPORT(JAI)</option>
										<option value="AGRA-AIRPORT(AGR)">AGRA-AIRPORT(AGR)</option>
									</select>
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<select class="form-control" name="to" id="to">
										<option>To</option required>
										
										<option value="DELHI-INDIRA GANDHI INTERNATIONAL AIRPORT(DEL)">DELHI-INDIRA GANDHI INTERNATIONAL AIRPORT(DEL)</option>

										<option value="CHENNAI-CHENNAI INTERNATIONAL AIRPORT(MAA)">CHENNAI-CHENNAI INTERNATIONAL AIRPORT(MAA)</option>
										
										<option value="GOA-INTERNATIONAL AIRPORT(GOI)">GOA-INTERNATIONAL AIRPORT(GOI)</option>
										<option value="PUNE-INTERNATIONAL AIRPORT(PNQ)">PUNE-INTERNATIONAL AIRPORT(PNQ)</option>
										<option value="JAIPUR-INTERNATIONAL AIRPORT(JAI)">JAIPUR-INTERNATIONAL AIRPORT(JAI)</option>
										<option value="AGRA-AIRPORT(AGR)">AGRA-AIRPORT(AGR)</option>
									</select>
				</div>
			</div>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<select class="form-control" name="preferedairline" id="preferedairline" required>
										<option>Preferred Airline</option>
										<option value="American Airline">American Airline</option>
										<option value="Delta Airlines">Delta Airlines</option>
										<option value="Frontier Airline">Frontier Airline</option>
										<option value="Jet Blue">Jet Blue</option>
										<option value="Southwest Airlines">Southwest Airlines</option>
									</select>
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<select class="form-control" name="preferedseating" id="preferedseating" required>
										<option>Preferred Seating</option>
										<option value="Window">Window</option>
										<option value="Aisle">Aisle</option>
										<option value="Special">Special (Request note below)</option>
									</select>
				</div>
			</div>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input id="datepicker" name="Departuredate" type="date" placeholder="Departure Date" value="Departuredate"  
					    required="">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="text" id="timepicker" name="Departuretime" class="timepicker form-control" placeholder="Departure Time" value="Departuretime" required>
				</div>
			</div>

			<div class="triple-wthree">
				<div class="field-agileinfo-spc form-w3-agile-text11">
					<select class="form-control" id="adult" name="adult">
												<option value="">Adult(12+ Yrs)</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>         
												<option value="4">4</option>
												<option value="5">5+</option>
											</select>
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text22">
					<select class="form-control" id="children" name="children">
												<option value="">Children(2-11 Yrs)</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>         
												<option value="4">4</option>
												<option value="5">5+</option>     
											</select>
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text33">
					<select class="form-control" id="infant" name="infant">
												<option value="">Infant(under 2Yrs)</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>         
												<option value="4">4</option>
												<option value="5">5+</option>    
											</select>
				</div>
			</div>
			<div class="radio-section">
				<h6>Select your Fare</h6>
				<ul class="radio-buttons-w3-agileits">
					<li>
						<input type="radio" id="oneorround" name="oneorround" value="one way">
						<label for="a-option">One Way</label>
						<div class="check"></div>
					</li>
					<li>
						<input type="radio" id="oneorround" name="oneorround" value="Round Trip">
						<label for="b-option">Round-Trip</label>
						<div class="check">
							<div class="inside"></div>
						</div>
					</li>
				</ul>
				<div class="clear"></div>
			</div>
			<!--<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input id="datepicker1" name="Text" type="text" placeholder="Return Date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"
					    required="">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="text" id="timepicker1" name="Time" class="timepicker form-control" placeholder="Return Time" value="">
				</div>
			</div>
			<div class="field-agileinfo-spc form-w3-agile-text">
				<textarea name="Message" placeholder="Any Message..."></textarea>
			</div>
			<h3 class="sub-heading-agileits">Personal Details</h3>
			<div class="main-flex-w3ls-sectns">
				<div class="field-agileinfo-spc form-w3-agile-text1">
					<input type="text" name="Name" placeholder="Full Name" required="">
				</div>
				<div class="field-agileinfo-spc form-w3-agile-text2">
					<input type="text" name="Phone no" placeholder="Phone Number" required="">
				</div>
			</div>
			<div class="field-agileinfo-spc form-w3-agile-text">
				<input type="email" name="Email" placeholder="Email" required="">
			</div>-->
			<div class="clear"></div>
			<input type="submit" value="Book Now" name="submit">
			<!--<input type="reset" value="Clear Form">-->
			<div class="clear"></div>
		</form>
		<!--// Form starts here -->
	</div>
	<!--copyright-->
	<div class="copyright">
	<!--	<p>&copy; 2018. Airline Booking Form . All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a>			</p>-->
	</div>
	<!--//copyright-->
	<script type="text/javascript" src="asyourjs/jquery-2.2.3.min.js"></script>
	<!-- Time Js -->
	<script type="text/javascript" src="asyourjs/wickedpicker.js"></script>
	<script type="text/javascript">
		$('.timepicker,.timepicker1').wickedpicker({
			twentyFour: false
		});
	</script>
	<!--// Time Js -->
	<!-- Calendar Js -->
	<script src="asyourjs/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar Js -->

</body>

</html>