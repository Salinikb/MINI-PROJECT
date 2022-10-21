<?php 
    require_once("db_connect.php");
?>

<?php

   

function indexx($fullname, $password, $conn){
	
	$query = mysqli_query($conn, "SELECT * FROM users WHERE fullname='".$fullname."'");
	$query1 = mysqli_query($conn,"INSERT INTO `login_tb`( `fullname`, `password`) VALUES ('$fullname','$password')");

	$numrows = mysqli_num_rows($query);
	if($numrows !=0)
	{
		while($row = mysqli_fetch_assoc($query))
		{
			$dbusername=$row['fullname'];
			$dbpassword=$row['password'];
			$type=$row['type'];

			$id=$row['id'];
		}
		if($fullname == $dbusername && ($password==$dbpassword))
		{
			
			$_SESSION['sess_user']=$fullname;
			$_SESSION['sess_eid']=$id;
			//Redirect Browser
			if($type=="admin"){
				header("Location:admin/index.php?page=home");
			}
			else if($type=="user"){
			header("Location:userpage.php");
			}
			return true;
		}
	}
	else{
		 echo "Invalid Username or Password";
		 return false;
		 
	 }
	 
}

function signup($fullname,$email,$phone,$password,$repassword,$gender,$nationality,$type,$conn){
$hashedPassword = $password;

$query = mysqli_query($conn,"INSERT INTO users(fullname,  email, phone, password, nationality,  type) VALUES('$fullname','$email','$phone','$hashedPassword','$nationality','$type')");
$query1 = mysqli_query($conn,"SELECT id from users WHERE fullname='".$fullname."'");
$eid = mysqli_fetch_assoc($query1);

if($query){


	echo "Registration successfull!!";
	
	$_SESSION['sess_user'] = $fullname;
	$_SESSION['sess_eid'] = $eid['id'];

	header("Location:indexx.php");
	exit;
}
else{
	echo "Query Error : " . "INSERT INTO users(fullname,  email, phone, password, nationality,  type) VALUES('$fullname','$email','$phone','$hashedPassword','$nationality','$type')" . "<br>" . mysqli_error($conn);
	echo "<br>";
	echo "Query Error : " . "SELECT id from users WHERE fullname='".$fullname."'" . "<br>" . mysqli_error($conn);
}

}

?>