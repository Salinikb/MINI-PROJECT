<?php 
    require_once("db_connect.php");
	//echo 'Registration successful!!';
	
?>

<?php

   

function indexx($fullname, $password, $conn){
	
	$query = mysqli_query($conn, "SELECT * FROM users WHERE fullname='$fullname' AND password='$password'");

	$numrows = mysqli_num_rows($query);
	if($numrows > 0){
		$row = mysqli_fetch_assoc($query);
		$type= $row['type'];
		$_SESSION['sess_username']= $row['fullname'];;
		$_SESSION['sess_id']= $row['reg_id'];
		$_SESSION['sess_type']= $type;
		//Redirect Browser
		if($type=="admin"){
			header("Location: index.php?page=home");
		}
		else if($type=="user"){
		header("Location:asyourneed.php");
		}
		return true;
	}
	else{
		 echo "Invalid Username or Password";
		 return false;
		 
	 }
}

function signup($fullname,$email,$phone,$password,$repassword,$gender,$nationality,$type,$conn){
	$hashedPassword = $password;

	$reg_query = mysqli_query($conn,"INSERT INTO users(fullname, email, phone, password, gender, nationality,  type) VALUES('$fullname','$email','$phone','$hashedPassword','$gender','$nationality','$type')");
		
	if($reg_query){

		$reg_id_query = mysqli_query($conn,"SELECT reg_id from users WHERE email='".$email."'");
	    $reg_id_res = mysqli_fetch_assoc($reg_id_query);
		$reg_id= $reg_id_res['reg_id'];
		$log_query= mysqli_query($conn, "INSERT INTO login_tb VALUES (null,$reg_id,'$fullname','$password','$type')");
		if($log_query){
			echo '<script>alert("Registration successful.")</script>';
			$_SESSION['sess_username'] = $fullname;
			$_SESSION['sess_id'] = $reg_id;

			if($type=='user'){
				header("Location:indexx.php");
			}
			else if($type=='admin'){
				header("Location: index.php?page=home");
			}
		}
	}
	else{
		echo "Query Error : " . "INSERT INTO users(fullname,  email, phone, password, gender, nationality,  type) VALUES('$fullname','$email','$phone','$hashedPassword','$gender','$nationality','$type')" . "<br>" . mysqli_error($conn);
		echo "<br>";
		echo "Query Error : " . "SELECT reg_id from users WHERE fullname='".$fullname."'" . "<br>" . mysqli_error($conn);
	}
}


?>