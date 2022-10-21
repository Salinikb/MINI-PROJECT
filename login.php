<html>

<?php
 include ('config.php'); 
 
session_start();

if (isset($_POST['submit'])){
	$name=$_POST['name'];
	$pass=$_POST['password'];
    $passwrd= md5($pass);
	$sql="SELECT * FROM register_tb WHERE name='$name' AND passwrd='$passwrd'";
    
	$result = mysqli_query($con,$sql);
	//if ($result){  
		if (mysqli_num_rows($result)>=1){
			$row = mysqli_fetch_array($result);
			$_SESSION['name']=$row['name'];
			$_SESSION['passwrd']=$row['passwrd'];
          // $_SESSION['role']=$row['role'];
			//if($row['role']=="admin"){
				//die(header("Location: adminpage.php"));
			//}
			//else
            {
				die(header("Location: admin/index.php?page=home"));
			}
		}
		else{
			echo "Invalid username or password";
            
		}
	//}
	/*else{
		echo "Error: ".$sql."<br>".mysqli_error($con);
	}	*/
}
?>

<head>
    <title>login</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <!-- //Meta tag Keywords -->
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <!--/Style-CSS -->
    <link rel="stylesheet" href="css/login.css" type="text/css" media="all" />
    <!--//Style-CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all">

</head>

<body>
    <div class="w3l-signinform">
        <!-- container -->
        <div class="wrapper">
            <!-- main content -->
            <div class="w3l-form-info">
                <div class="w3_info">
                    <h1>Welcome Back</h1>
                    <p class="sub-para">please login into your account</p>
                    <h2>Log In</h2>
                    <form  action ="#" method="post">
                        <div class="input-group">
                            <span><i class="fa fa-user" aria-hidden="true"></i></span>
                            <input type="text" name="name" placeholder="Username" required="">
                        </div>
                        <div class="input-group two-groop">
                            <span><i class="fa fa-key" aria-hidden="true"></i></span>
                            <input type="password" name="password"   placeholder="Password" required="">
                        </div>
                        <div class="form-row bottom">
                            <div class="form-check">
                                
                            </div>
                            <a href="#url" class="forgot">Forgot password?</a>
                        </div>
                        <button class="btn btn-primary btn-block" name="submit" type="submit">Log In</button>
                    </form>
                
                    <p class="account">Don't have an account? <a href="register.php">Register</a></p>
                </div>
            </div>
            <!-- //main content -->
        </div>
        <!-- //container -->
        <!-- footer -->
        <div class="footer">
            <p></a></p>
        </div>
        <!-- footer -->
    </div>

</body>

</html>
</html>
