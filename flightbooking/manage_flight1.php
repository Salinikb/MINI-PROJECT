<?php include "db_connect.php";
//include 'navbar1.php'
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
					<b>Flight List</b>
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
						
					</colgroup>
					<thead>
						<tr>
							
							<th class="text-center">Airline</th>
							<th class="text-center">DepartureLocation</th>
							<th class="text-center">Arrivallocation</th>
							<th class="text-center">Departuredate and time</th>
						</tr>
					</thead>
					<tbody>
						<?php
							//$airport = $conn->query("SELECT * FROM airport_list ");
							//while($row = $airport->fetch_assoc()){
								//$aname[$row['id']] = ucwords($row['airport'].', '.$row['location']);
							//}
							$qry = $conn->query("SELECT * FROM flights_tb ");
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
						
					</colgroup>
					<thead>
						<tr>
							
							<th class="text-center">Arrivaldate and time</th>
							<th class="text-center"> No of Seats</th>
							<!--<th class="text-center">Booked</th>-->
							<!--<th class="text-center">Available</th>-->
							<th class="text-center">Package</th>

								
							
                            <th><font color='Red'>Edit</font></th>
							<th class="text-center">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							//$airport = $conn->query("SELECT * FROM airport_list ");
							//while($row = $airport->fetch_assoc()){
								//$aname[$row['id']] = ucwords($row['airport'].', '.$row['location']);
							//}
							$qry = $conn->query("SELECT * FROM flights_tb ");
							while($row = $qry->fetch_assoc()):
								//$booked = $conn->query("SELECT * FROM booked_flight where id = ".$row['id'])->num_rows;

						 ?>
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
						 	</td>
						 	<td class="text-right"><?php echo $row['seats'] ?></td>

						 	<!--<td class="text-right"></td>-->
						 	<td class="text-right"><?php echo number_format($row['price'],2) ?></td>
						 	
							 <td>
						 		
						 		
								 <b><font color="#663300">
									<a href="edit.php?id=<?php echo $row['id']?>">Edit</a>
								</font></b></td>
								 
								<td>
						 		
						 		
								 <b><font color="#663300">
									
							
							
							
							<?php
                    if($row['status']==1){
                        echo '<p><a href="inactive.php?id='.$row['id'].'$status=1">Disable</a></p>';


						
                    }else{
                        echo '<p><a href="active.php?id='.$row['id'].'$status=0">Enable</a></p>';
                    }
                    ?>
													</font></b>

													</td>
								 
								  </div>
								  </div>
 
							  </td>

						 </tr>

						<?php endwhile; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
