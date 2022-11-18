<?php
include "db_connect.php";
?>

<?php
if(isset($_POST["submit"])){
	$Airline=$_POST["Airline"];
	
	$flightNo=$_POST["flightNo"];
	
	$DepartureLocation=$_POST["DepartureLocation"];
    $Arrivallocation=$_POST["Arrivallocation"];
    $Departuredate=$_POST["Departuredate"];
    $arrivaldate=$_POST["arrivaldate"];
    $seats=$_POST["seats"];
    $price=$_POST["price"];
	
	//$image=$_FILES["image"]["name"];
	//move_uploaded_file($_FILES["image"]["tmp_name"],"pictures/".$image);
	mysqli_query($conn,"INSERT INTO `flights_tb`(`Airline`, `flightNo`, `DepartureLocation`, `Arrivallocation`, `Departuredate`, `arrivaldate`, `seats`, `price`) VALUES ('$Airline','$flightNo','$DepartureLocation','$Arrivallocation','$Departuredate','$arrivaldate','$seats','$price')");
	echo "<script language='javascript'>";
	echo 'window.location.href = "index.php?page=manage_flight1";';
	echo "alert('flight details added succefully')";
	
	echo "</script>";
	
}
?>
<body>

<div class="container-fluid">
	<div class="col-lg-12">
	
	

		<form method="POST" autocomplete="off">

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="" class="control-label">Airline</label>
						<select name="Airline" id="Airline" class="form-control">
							<option>Airasia(AKK)</option>
							<option>Airarabia(ARR)</option>
								
						</select>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="">flightNo</label>
						<input type="text" name="flightNo" id="" class="form-control" required>
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="">DepartureLocation</label>
						<input name="DepartureLocation" id="DepartureLocation" type="text" step="any" class="form-control text-right"  reguired>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="">Arrivallocation</label>
						<input name="Arrivallocation" id="Arrivallocation" type="text" step="any" class="form-control"  reguired>
					</div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-md-6">
					<div class="">
						<label for="">Departure Data/Time</label>
                        <input type="text" name="Departuredate" id="Departuredate" class="form-control datetimepicker" required onchange="addDate()" value="<?php echo isset($Departuredate) ? date("Y-m-d H:i",strtotime($Departuredate)) : '' ?>">
					</div>
				</div>
				<div class="col-md-6">
					<div class="">
						<label for="">Arrival Data/Time</label>
						<input type="text" name="arrivaldate" id="arrivaldate" class="form-control datetimepicker"required onchange="addDate()" value="<?php echo isset($arrivaldate) ? date("Y-m-d H:i",strtotime($arrivaldate)) : '' ?>">
					</div>
					
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="">
						<label for="">Seats</label>
						<input name="seats" id="seats" type="number" step="any" class="form-control text-right"  reguired>
					</div>
				</div>
				<div class="col-md-6">
					<div class="">
						<label for="">Price</label>
						<input name="price" id="price" type="number" step="any" class="form-control text-right"></br>
                        <input type="submit" name="submit" value="Submit" class="btn btn-success">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
                        </body>
						<script>
	$(document).ready(function(){
		$('.select2').each(function(){
		$(this).select2({
		    placeholder:"Please select here",
		    width: "100%"
		  })
	})
	})
	 $('.datetimepicker').datetimepicker({
      format:'Y-m-d H:i',
  })
	 $('#manage-flight').submit(function(e){
	 	e.preventDefault()
	 	start_load()
	 	$.ajax({
	 		url:'ajax.php?action=save_flight',
	 		method:'POST',
	 		data:$(this).serialize(),
	 		success:function(resp){
	 			if(resp == 1){
	 				alert_toast("Flight successfully saved.","success");
	 				setTimeout(function(e){
	 					location.reload()
	 				},1500)
	 			}
	 		}
	 	})
	 })
	 $('.datetimepicker').attr('autocomplete','off')
</script>
	