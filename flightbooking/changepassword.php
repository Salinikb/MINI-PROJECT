<?php
include 'navbar2.php';?>
<html>
	<head>
		<title>Pasword Reset</title>
		<style type="text/css">
			body
			{
				background: url(../pictures/t2.jpg) ;
				background-size:cover;
				font-family:Arial, Helvetica, sans-serif;
				
			}
			.wrap
			{
				max-width:350px;
				border-radius:20px;
				margin:auto;
		
				box-sizing:border-box;
				padding:40px;
				color:#fff;
				margin-top:205px;
				
			}
			h2
			{
				text-align:center;
			}
			input[type=text],input[type=password]
			{
				width:100%;
				box-sizing:border-box;
				padding:12px 5px;
				background:rgba(0,0,0,5,10);
				outline:none;
				border:none;
				border-bottom:1px dotted #fff;
				color:#000;
				border-radius:5px;
				margin:5px;
				font-weight:bold;
			}
			input[type=submit]
			{
				width:100%;
				box-sizing:border-box;
				padding:10px 0;
				margin-top:30px;
				outline:none;
				border:none;
				background:red;
				opacity:0.7;
				border-radius:20px;
				font-size:20px;
				color:CYAN;
			}
			input[type=submit]:hover
			{
				background:black;
				opacity:0.7;
			}
			input[type=button]
			{
				width:100%;
				box-sizing:border-box;
				padding:10px 0;
				margin-top:5px;
				outline:none;
				border:none;
				background:cyan;
				opacity:0.7;
				border-radius:20px;
				font-size:20px;
				color:RED;
			}
			input[type=button]:hover
			{
				background:black;
				opacity:0.7;
			}
		</style>
	</head>
	<body>
		<div class="wrap">
			<h2>RESET PASSWORD</h2>
			<form action="#"  method="POST" autocomplete="off">
				<fieldset>
					<legend>Email</legend>
					<input type ="text" name="email" placeholder="Enter Your Valid Email" required />
				</fieldset><br>
				<fieldset>
					<legend>New Password</legend>
					<input type ="password" name="newpass" placeholder="Enter Your New Password" required />
				</fieldset>
				<input type="submit" name="submit" value="UPDATE PASSWORD"/> <br><br>
	
			</form>
		</div>
	</body>
</html>

<?php
	include 'db_connect.php';
    include("functions.php");


	if(isset($_POST['submit']))
	{
		$newpass=$_POST['newpass'];
		$email_id= $_POST['email'];
		$sql = "SELECT * from users WHERE email='$email_id'";
		$result = mysqli_query($conn,$sql);
       // echo "$email_id";
		if(mysqli_num_rows($result)==1)
		{
			$sql1="UPDATE users SET `password` = '$newpass' WHERE `email` = '$email_id'";
			$result1 = mysqli_query($conn,$sql1);
			if($result1)
			{
                echo "$email_id";
				echo "<script>
						alert('Password updated successfully');
						window.location.href='indexx.php';
					</script>";
			}
			else
			{
				echo "<script>alert('Password Updation Failed. Try again!')</script>";
			}
		}
		else{
			echo "<script>alert('Incorrect email ID')</script>";
		}
	}
?>
