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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Online flight booking Application</title>
    <style>
        #invalidMsg{
            display:none;
        }
        body{
      
      
      background: url(../pictures/t2.jpg) no-repeat center;
  
  
          
  
          
          
    }
    </style>
</head>
     

<body>

    <!-- header -->
    <nav class="navbar header-nav navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Online flight booking</a>

            <a id="register" href="signup.php">Sign Up</a>
            <a id="register" href="index1.php">Home</a>
        </div>
    </nav>
    <!-- header ends -->


   

    <!-- body -->
    <div class="container-fluid">
        <div class="row">
            <!-- container and row divs for responsive -->

            <!-- leftComponent -->
            <div class="leftComponent col-md-5">
                <img src="">
            </div>
            <!-- leftComponent ends -->


            <!-- rightComponent -->
            <div class="rightComponent col-md-5">

                <h3>Please login to continue. . .</h3>
                <hr>
                <form method="POST" class="loginForm" autocomplete="off">
                <div class="alert alert-danger" id="invalidMsg">
                    <?php      
                        if(isset($_POST['login'])){
                            if($login == false)
                                echo "<script type='text/javascript'>document.getElementById('invalidMsg').style.display = 'block';</script>";
                                echo "Invalid Username or Password";
                        }
                        else
                            echo "";
                    ?>
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="text" id="fullname" name="fullname" placeholder="Enter Username" required>
                    </div>
                    
                    <div class="mb-3">
                        <input class="form-control" type="password" id="password" name="password" placeholder="Enter Password"
                            required>
                    </div>
                    <div>
                            <a href="changepassword.php" class="forgot">Forgot password?</a>
                        </div>
                    <input type="submit" class="btn btn-success" name="submit" value="Log In">
                </form>
            </div>
            <!-- rightComponent ends -->
        </div>
    </div>
    <!-- body ends -->


    <div class="content2">
        <p class="heading lead text-start">
           
        </p>
        <p class="text-start">
<pre>
            
</pre>
            
        </p>
    </div>

    <footer class="footer navbar navbar-expand-lg navbar-light bg-light" style="color:white;">
    </footer>
</body>
</html>

<?php
ini_set('display_errors', true);
error_reporting(E_ALL);
?>