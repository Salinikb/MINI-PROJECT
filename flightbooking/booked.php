<?php include "db_connect.php";

?>

 <style>


body{
      
      
    background: url(../pictures/t2.jpg) no-repeat center;


        

        
        
  }
	</style>

 
<link rel="stylesheet" href="" type="text/css" media="all" />

<div class="container-fluid">
	<div class="col-lg-12">
		
		<div class="card">
			<div class="card-header">
				<large class="card-title">
					<b>Booking Details</b>
				</large>
				<!--<button class="btn btn-primary btn-block col-md-2 float-right" type="button" id="new_flight"><i class="fa fa-plus"></i> New Flight</button>-->
			</div>
			<div class="card-body">
				<table class="table table-bordered" id="flight-list">
					<colgroup>
						<!--<col width="10%">-->
						<!--<col width="35%">-->
						<!--<col width="10%">-->
						<col width="10%">
						<col width="10%">
						<col width="10%">
						<col width="15%">
                        <col width="15%">
                        <col width="15%">
					</colgroup>
					<thead>
						<tr>
							
							<th class="text-center">Booking id</th>
							<th class="text-center">DepartureLocation</th>
                            <th class="text-center">AirlineLocation</th>
							<th class="text-center">Prefered airline</th>
							<!--<th class="text-center">Available</th>-->
                            <th class="text-center">Prefered seating</th>
							<th class="text-center">Departure date</th>
						</tr>
					</thead>
					<tbody>
						<?php
							//$airport = $conn->query("SELECT * FROM airport_list ");
							//while($row = $airport->fetch_assoc()){
								//$aname[$row['id']] = ucwords($row['airport'].', '.$row['location']);
							//}
							$qry = $conn->query("SELECT * FROM bookasyour_tb ");
							while($row = $qry->fetch_assoc()):
								//$booked = $conn->query("SELECT * FROM booked_flight where id = ".$row['id'])->num_rows;

						 ?>
						 <tr>
						 	
						 	
						 	<td>
						 		
						 		
								 <p><?php echo $row['book_id'] ?></p>
								 
								 
						 		<!--<p><small>Location :<b><?php //echo $aname[$row['departure_airport_id']].' - '.$aname[$row['arrival_airport_id']] ?></small></b></p>-->
						 		
						 		</div>
						 		</div>
						 	</td>
							 <td>
						 		
								 <p><?php echo $row['from'] ?></p>
									 
									
									 </div>
									 </div>
								 </td>
								 <td>
						 		
                             <p><?php echo $row['to'] ?></p>
                                 
								
						 		</div>
						 		</div>
						 	</td>
                             <td>
						 		
                             <p><?php echo $row['preferedairline'] ?></p>
                                 
								
						 		</div>
						 		</div>
						 	</td>
                             <td>
						 		
							 <p><?php echo $row['preferedseating'] ?></p>
                                 
								
						 		</div>
						 		</div>
						 	</td>

                             <td>
						 		
								
							 <p><?php echo $row['Departuredate'] ?></p>
								
						 		</div>
						 		</div>
						 	</td>
                         
						 		
						 	
						 </tr>

						<?php endwhile; ?>
					</tbody>
				</table>
			</div>
		</div>

		<br>
		<div class="card">
			<div class="card-body">
				<table class="table table-bordered" id="flight-list">
					<colgroup>
						<!--<col width="10%">-->
						<!--<col width="35%">-->
						<!--<col width="10%">-->
						<col width="10%">
						<col width="10%">
						<col width="10%">
						<col width="15%">
                        <col width="15%">
                        <col width="15%">
					</colgroup>
					<thead>
						<tr>
							
							<th class="text-center">Booking id</th>
							<th class="text-center">Time</th>
                            <th class="text-center">Adult</th>
							<th class="text-center">Children</th>
							<th class="text-center">Infant</th>
                            
                            
                            

						</tr>
					</thead>
					<tbody>
						<?php
							//$airport = $conn->query("SELECT * FROM airport_list ");
							//while($row = $airport->fetch_assoc()){
								//$aname[$row['id']] = ucwords($row['airport'].', '.$row['location']);
							//}
							$qry = $conn->query("SELECT * FROM bookasyour_tb ");
							while($row = $qry->fetch_assoc()):
								//$booked = $conn->query("SELECT * FROM booked_flight where id = ".$row['id'])->num_rows;

						 ?>
						 <tr>
						 	<td><p><?php echo $row['book_id'] ?></p></td>
                            <td><p><?php echo $row['Departuretime'] ?></p></td>
                            <td><p><?php echo $row['adult'] ?></p></td>
                            <td><p><?php echo $row['children'] ?></p></td>
							<td><p><?php echo $row['infant'] ?></p></td>
						 </tr>

						<?php endwhile; ?>
					</tbody>
				</table>
			</div>
		</div>

	</div>
</div>
