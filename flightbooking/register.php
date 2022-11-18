
<html>
<?php
require_once "config.php";
if(isset($_SESSION[''])!="") {
header("Location: index.php");
}
if (isset($_POST['register_btn'])) {
$name = mysqli_real_escape_string($con, $_POST['name']);
$nationality= mysqli_real_escape_string($con, $_POST['nationality']);
$passportNo = mysqli_real_escape_string($con, $_POST['passportNo']);
$mobileNo = mysqli_real_escape_string($con, $_POST['mobileNo']);
//$role = mysqli_real_escape_string($con, $_POST['role']);
$dob = mysqli_real_escape_string($con, $_POST['dob']);
$gender = mysqli_real_escape_string($con, $_POST['gender']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$passwrd = mysqli_real_escape_string($con, $_POST['passwrd']);
$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']); 

if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
$name_error = "Name must contain only alphabets and space";
}
if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
$email_error = "Please Enter Valid Email ID";
}
if(strlen($password) < 6) {
$password_error = "Password must be minimum of 6 characters";
}       
if(strlen($mobileNo) < 11) {
$mobile_error = "Mobile number must be minimum of 10 characters";
}
if($password != $cpassword) {
$cpassword_error = "Password and Confirm Password doesn't match";
}
if(mysqli_query($con, "INSERT INTO register_tb(name,nationality,passportNO,mobileNo,dob,gender,email,passwrd,cpassword) VALUES('" . $name . "', '" . $nationality . "', '" . $passportNo . "', '" . $mobileNo . "', '" . $dob . "', '" . $gender . "', '" . $email . "', '" . md5($passwrd) . "', '" . md5($cpassword) . "')")) {
	//echo "Registered Successfully";
	//die(header("Location: login.php"));
	echo "<script language='javascript'>";
	echo 'window.location.href = "login.php";';
	echo "alert('Registered successfully')";
	
	echo "</script>";
exit();
} else
 {
echo "Error: " ;"" . mysqli_error($con);
}
mysqli_close($con);
}
?>
<html>
	
<head>
	<title>Registration </title>
    <link rel="stylesheet" href="css/login.css" type="text/css" media="all" />
</head>
<body>
<div class="header">
	<h2>Register</h2>
</div>
<form method="post" action="register.php">
<div class="input-group">
		<label>Name</label>
		<input type="text" name="name" placeholder="name" required="">
		<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
	</div>
	<div class="input-group">
		<label>Nationality</label>
		<input type="text" name="nationality" placeholder="nationality" required="">
	</div>
	<div class="input-group">
		<label>Passportno</label>
		<input type="text" name="passportNo" placeholder="passportNo" required="">
	</div>
	<div class="input-group">
		<label>Mobile</label>
		<input type="text" name="mobileNo" placeholder="mobileNo" required="">
		<span class="text-danger"><?php if (isset($mobile_error)) echo $mobile_error; ?></span>
	</div>
	<div class="input-group">
		<label>Date Of Birth</label>
		<input type="date" name="Dob" placeholder="Dob" required="">
	</div>
	<!--<div class="input-group">
		<label>Role</label>
		<select name="role">
			<option disabled selected>Select your role</option>
			<option value="admin">Admin</option>
			<option value="user">User</option>
		</select>
	</div> -->
	<div class="input-group">
		<label>Gender</label><pre>
	Male   <input type="radio" name="gender" value="male" > 
	Female <input type="radio" name="gender" value="female"> 
	Other  <input type="radio" name="gender" value="other">
</pre>
	</div>
	
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" placeholder="email" required="">
		<span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="text" name="passwrd" placeholder="passwrd" required="">
		<span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="text" name="cpassword" placeholder="cpassword" required="">
		<span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
	</div>
	
	
	
	
	
	
	
	<div class="input-group">

		<button  type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
</form>
</body>
</html>
</html>