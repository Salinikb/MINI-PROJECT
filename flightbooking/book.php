<?php
include "db_connect.php";
?>

<?php
$id=$_REQUEST['id'];
mysqli_query($conn,"insert into bookedflights ( `Airline`, `flightNo`, `DepartureLocation`, `Arrivallocation`, `Departuredate`, `arrivaldate`, `seats`, `price`) select `Airline`, `flightNo`, `DepartureLocation`, `Arrivallocation`, `Departuredate`, `arrivaldate`, `seats`, `price` from flights_tb where id='$id'");
	
	echo "<script language='javascript'>";
	echo 'window.location.href = "viewbooked.php";';
	echo "alert('Booking succefully')";
	
	echo "</script>";
	

?>