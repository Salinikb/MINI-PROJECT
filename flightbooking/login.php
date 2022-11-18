<html>

<?php 
require_once("db_connect.php"); 
include("functions.php");
session_start();
?>

<?php

 	if (isset($_POST['submit'])) {
	 	if (!empty($_POST['fullname']) && !empty($_POST['password'])) {
	 		$fullname = mysqli_real_escape_string($conn,$_POST['fullname']);
	 		$password = mysqli_real_escape_string($conn,$_POST['password']);

	 		//$type = mysqli_real_escape_string($conn,$_POST['type']);

            $login = indexx($fullname,$password,$conn);          
	 	}
	 	else{
		 	echo "Required All fields!";
		} 	
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
     <!-- header -->
     <nav class="navbar header-nav navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Online flight booking</a>

            <a id="register" href="signup.php">Sign Up</a>
        </div>
    </nav>
    <!-- header ends -->

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
                    <form  action ="#" method="post" autocomplete="off">
                        <div class="input-group">
                            <span><i class="fa fa-user" aria-hidden="true"></i></span>
                            <input type="text" name="fullname" placeholder="Username" required="">
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
                
                    <p class="account">Don't have an account? <a href="signup.php">Register</a></p>
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
