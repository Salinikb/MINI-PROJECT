
<style>
</style>
<nav id="sidebar" class='mx-lt-5 bg-light' >
		
		<div class="sidebar-list">

				<a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> Home</a>
				<a href="index.php?page=booked" class="nav-item nav-booked"><span class='icon-field'><i class="fa fa-book"></i></span> Booked</a>
				<a href="index.php?page=flights1" class="nav-item nav-flights"><span class='icon-field'><i class="fa fa-plane-departure"></i></span> Flights</a>
				<!--<a href="index.php?page=airport" class="nav-item nav-airport"><span class='icon-field'><i class="fa fa-map-marked-alt"></i></span> Airport</a>	-->	
				<!--<a href="index.php?page=" class="nav-item nav-airport"><span class='icon-field'><i class="fa fa-building"></i></span> Airlines</a>	-->
                        <a href="index.php?page=paymentstatus" class="nav-item nav-airport"><span class='icon-field'><i class="fa fa-building"></i></span>Payment Status</a>		
                        <a href="index.php?page=" class="nav-item nav-airport"><span class='icon-field'><i class="fa fa-building"></i></span> View feedback</a>			
				<a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Users</a>
				<!--<a href="index.php?page=changepassword" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> changepassword</a>-->
			<a href="index.php?page=manage_flight1" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Manage flight details</a>
			
			<a href="logout.php" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Logout</a>
		</div>

</nav>
<script>
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>
