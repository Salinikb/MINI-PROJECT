<?php include ('db_connect.php'); 
session_start();

if (isset($_POST['submit'])){
	$uname=$_POST['usrname'];
	$pwd=$_POST['passwd'];
	$sql="SELECT * FROM login_tbl WHERE usr_name='$uname' AND pass='$pwd'";
	$result = mysqli_query($conn,$sql);
	if ($result){
		if (mysqli_num_rows($result)>0){
			$row = mysqli_fetch_array($result);
			$_SESSION['user']=$row['id'];
			$_SESSION['name']=$row['usr_name'];
			if($row['id']==1){
				die(header("Location:index.php?page=home"));
			}
			else{
				die(header("Location: userpage.php"));
			}
		}
		else{
			echo "Invalid username or password";
		}
	}
	else{
		echo "Error: ".$sql."<br>".mysqli_error($conn);
	}	
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>login</title>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
		integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="log_reg.css">
</head>

<body>
	<div class="container">
		<div class="header">
			<h1><u style="color:#320d3e">Login</u></h1>
		</div>
		<div class="main">
			<form action="#" method="POST">
				<span>
					<i class="fa fa-user"></i>
					<input type="text" placeholder="Username" name="usrname">
				</span><br>
				<span>
					<i class="fa fa-lock"></i>
					<input type="password" placeholder="password" name="passwd">
				</span><br>
				<button type="submit" name="submit">login</button>

			</form>
		</div>
	</div>
</body>

</html>