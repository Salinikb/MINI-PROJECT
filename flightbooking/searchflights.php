<?php include "db_connect.php";
include 'navbar4.php'
?>

 <style>


body{
      
      
    background: url(../pictures/t2.jpg) no-repeat center;


        

        
        
  }
	</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
 
<link rel="stylesheet" href="" type="text/css" media="all" />
<!--<link rel="stylesheet" href="styleupdate.css">-->


         
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
				<table class="table table-bordered" id="flight-list" style="width:75%" cellpadding="10" cellspacing="4" border="3" align="center">
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
							<th class="text-center">Arrivaldate and time</th>
							<th class="text-center">Seat Number</th>
							<!--<th class="text-center">Booked</th>-->
							<!--<th class="text-center">Available</th>-->
							<th class="text-center">Package</th>

								
							
                            <th><font color='Red'>Book your tickets</font></th>
							
						</tr>
					</thead>
					<tbody>
						<?php
							//$airport = $conn->query("SELECT * FROM airport_list ");
							//while($row = $airport->fetch_assoc()){
								//$aname[$row['id']] = ucwords($row['airport'].', '.$row['location']);
							//}
							$qry = $conn->query("SELECT * FROM flights_tb  ");
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
                             <td class="text-right">
							 <?php echo $row['seats'] ?></td>
                             <td class="text-right">
							 <?php echo $row['price'] ?></td>
						 		
						 		
                             <td>
						 		
						 		
								 <b><font color="#663300">
									<a href="book.php?id=<?php echo $row['id']?>">Book Now</a>
									
									
                                    
								</font></b></td>
								 
								<td>
						 		
						 		
								 
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
