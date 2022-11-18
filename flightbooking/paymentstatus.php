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
					<b>payment status</b>
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
							
							<th class="text-center">Name</th>
							<th class="text-center"> Email</th>
                            
					
							<!--<th class="text-center">Available</th>-->
                            <th class="text-center">Flight Info</th>
				
							<th class="text-center">Payment status</th>
                    
                            
                            

						</tr>
					</thead>
					<tbody>
						<?php
							//$airport = $conn->query("SELECT * FROM airport_list ");
							//while($row = $airport->fetch_assoc()){
								//$aname[$row['id']] = ucwords($row['airport'].', '.$row['location']);
							//}
							$qry = $conn->query("SELECT * FROM users ");
							while($row = $qry->fetch_assoc()):
								//$booked = $conn->query("SELECT * FROM booked_flight where id = ".$row['id'])->num_rows;

						 ?>
						 <tr>
						 	
						 	
						 	<td>
						 		
						 		
								 <p><?php echo $row['fullname'] ?></p>
								 
								 
						 		<!--<p><small>Location :<b><?php //echo $aname[$row['departure_airport_id']].' - '.$aname[$row['arrival_airport_id']] ?></small></b></p>-->
						 		
						 		</div>
						 		</div>
						 	</td>
                             <td>
						 		
                             <p><?php echo $row['email'] ?></p>
                                 
								
						 		</div>
						 		</div>
						 	</td>
                             <td>
						 		
						 		
                                 
								
						 		</div>
						 		</div>
						 	</td>

                             <td>
						 		
								
                                 
								
						 		</div>
						 		</div>
						 	</td>
                            

						 	<!--<td class="text-right"></td>-->
						 	
						 </tr>

						<?php endwhile; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
