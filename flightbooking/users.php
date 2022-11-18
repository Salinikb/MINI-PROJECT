<?php include "db_connect.php"; ?>

<?php

if (isset($_POST['user_delete'])) {
    $user_id= $_POST['user_id'];
	$logdel_user= mysqli_query($conn, "DELETE from login_tb WHERE reg_id = $user_id");
	if(mysqli_affected_rows($conn) >= 1){
		$deluser_res= mysqli_query($conn, "DELETE FROM users WHERE reg_id = $user_id");
		if(mysqli_affected_rows($conn) >= 1){
			
			echo "<script>alert('User deleted successfully.');</script>";
		
		}
		else{
			echo "<script>alert('user deletion failed !!');</script>";
		}
    	echo "<script>window.location.href = '../admin/index.php?page=users';</script>";
	}
}
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
					<b>Users List</b>
				</large>
				
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
							<!--<th class="text-center">Booked</th>-->
							<!--<th class="text-center">Available</th>-->
							<th class="text-center">Gender</th>
							<th class="text-center">Phone</th>
							<th><font color='Red'>Delete</font></th>
                            

                            

						</tr>
					</thead>
					<tbody>
						<?php
							
							$qry = $conn->query("SELECT * FROM users ");
							while($row = $qry->fetch_assoc()):
								

						 ?>
						 <tr>
						 	
						 	
						 	<td>
						 		
						 		
								 <p><?php echo $row['fullname'] ?></p>
								 
								 
						 		
						 		
						 		</div>
						 		</div>
						 	</td>
                             <td>
						 		
						 		
                                 <p><?php echo $row['email'] ?></p>
								
						 		</div>
						 		</div>
						 	</td>
                             <td>
						 		
						 		
                                 <p><?php echo $row['gender'] ?></p>
								
						 		</div>
						 		</div>
						 	</td>

                             <td>
						 		
						 		
                                 <p><?php echo $row['phone'] ?></p>
								
						 		</div>
						 		</div>
							</td>
								

						 	
							 <td>
						 		
						 		
							 	<form action="users.php" method="POST">
									<input type="text" name="user_id" value="<?php echo $row['reg_id']; ?>" hidden>
									<input type="submit" name="user_delete" value="cancel">
								</form> 
							  </td>
					
							
                             <td class="text-center">
						 			
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
