<?php

include ('db_connect.php');

?>
<?php

if (isset($_POST['sub'])) {
   $reg_id = $_POST['reg_id'];
   $Airline = $_POST['fullname'];
   $flightNo = $_POST['password'];
   $DepartureLocation = $_POST['email'];
   $Arrivallocation = $_POST['gender'];
   $Departuredate = $_POST['nationality'];
   $arrivaldate = $_POST['phone'];
  
   
   $query="UPDATE users SET fullname='$fullname',password='$password',email='$email',gender='$gender',nationality='$nationality',phone='$phone' where reg_id='$reg_id'";
$query_run=mysqli_query($conn,$query);
if($query_run)
{
   // $_SESSION['status'] = "Category updated successfully";
   echo "updated successfully";
    header('location:flight.php');
}
else
{
    echo "no";
}
}

?>
   
<style>


body{
      
      
    background: url(../pictures/t2.jpg) no-repeat center;
    

        

        
        
  }
	</style>


             
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
         <link rel="stylesheet" href="styleupdate.css">
         
         <nav class="navbar header-nav navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Update user Details</a>

            
            <a id="register" href="index.php?page=manage_flight1">Home</a>
        </div>
    </nav>
         
		</head>   
                        <div class="wrapper">
    <div class="title">
    <link rel="stylesheet" href="css/style.css">
   
    </div>
   
    <div class="form">
      <?php
      if(isset($_GET['reg_id']))
      {
        $reg_id=$_GET['reg_id'];
        $query=mysqli_query($conn,"select * from users where reg_id='$reg_id'");
        while($row=mysqli_fetch_array($query))
      {
      
      ?>
      <html>
         <body>
            <form action="#" method="POST">
      
    <input type="hidden"name="id"value="<?= $row['reg_id']?>">
       <div class="inputfield">
          <label>Fullname</label>
          <input type="text" class="input" name="fullname" placeholder="Airline" value="<?= $row['fullname'] ?>" required>
       </div>   
       <div class="inputfield">
        <label>Password</label>
        <input type="password" class="input" name="password" placeholder="password" value="<?= $row['password'] ?>" required>
     </div> 
     <div class="inputfield">
        <label>Email</label>
        <input type="text" class="input" name="email" placeholder="email" value="<?= $row['email'] ?>" required>
     </div> 
     <div class="inputfield">
        <label>Gender</label>
        <input type="text" class="input" name="gender" placeholder="gender" value="<?= $row['gender'] ?>" required>
     </div> 
       <div class="inputfield">
          <label>Nationality</label>
          <input type="text" class="input" name="nationality" placeholder="nationality" value="<?= $row['nationality']  ?>" required>
       </div>  
       <div class="inputfield">
          <label>Phone</label>
          <input type="text" class="input" name="phone" placeholder="phone" value="<?= $row['phone'] ?>" required>
       </div>  
      
      
      <div class="inputfield">
        <input type="submit" value="submit" name="sub" class="btn">
      </div>
    </div>
    <?php }} ?>
   
</div>
</form>
</body>

home

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin |WILLFLY </title>
 	

<?php
	//session_start();
  //if(!isset($_SESSION['login_id']))
    //header('location:indexx.php');
 include('./header.php'); 
 // include('./auth.php'); 
 ?>

</head>
<style>
	body{
        background: #80ced6;
  }
  .modal-dialog.large {
    width: 80% !important;
    max-width: unset;
  }
  .modal-dialog.mid-large {
    width: 50% !important;
    max-width: unset;
  }
</style>

<body>
	<?php include 'topbar.php' ?>
	<?php include 'navbar.php' ?>
  <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-body text-white">
    </div>
  </div>
  <main id="view-panel" >
      <?php $page = isset($_GET['page']) ? $_GET['page'] :'home'; ?>
  	<?php include $page.'.php' ?>
  	

  </main>

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<div class="modal fade" id="confirm_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Confirmation</h5>
      </div>
      <div class="modal-body">
        <div id="delete_content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
      </div>
    </div>
  </div>
</body>
<script>
	 window.start_load = function(){
    $('body').prepend('<di id="preloader2"></di>')
  }
  window.end_load = function(){
    $('#preloader2').fadeOut('fast', function() {
        $(this).remove();
      })
  }

  window.uni_modal = function($title = '' , $url='',$size=""){
    start_load()
    $.ajax({
        url:$url,
        error:err=>{
            console.log()
            alert("An error occured")
        },
        success:function(resp){
            if(resp){
                $('#uni_modal .modal-title').html($title)
                $('#uni_modal .modal-body').html(resp)
                if($size != ''){
                    $('#uni_modal .modal-dialog').addClass($size)
                }else{
                    $('#uni_modal .modal-dialog').removeAttr("class").addClass("modal-dialog modal-md")
                }
                $('#uni_modal').modal('show')
                end_load()
            }
        }
    })
}
window._conf = function($msg='',$func='',$params = []){
     $('#confirm_modal #confirm').attr('onclick',$func+"("+$params.join(',')+")")
     $('#confirm_modal .modal-body').html($msg)
     $('#confirm_modal').modal('show')
  }
   window.alert_toast= function($msg = 'TEST',$bg = 'success'){
      $('#alert_toast').removeClass('bg-success')
      $('#alert_toast').removeClass('bg-danger')
      $('#alert_toast').removeClass('bg-info')
      $('#alert_toast').removeClass('bg-warning')

    if($bg == 'success')
      $('#alert_toast').addClass('bg-success')
    if($bg == 'danger')
      $('#alert_toast').addClass('bg-danger')
    if($bg == 'info')
      $('#alert_toast').addClass('bg-info')
    if($bg == 'warning')
      $('#alert_toast').addClass('bg-warning')
    $('#alert_toast .toast-body').html($msg)
    $('#alert_toast').toast({delay:3000}).toast('show');
  }
  $(document).ready(function(){
    $('#preloader').fadeOut('fast', function() {
        $(this).remove();
      })
  })
  $('.datetimepicker').datetimepicker({
      format:'Y/m/d H:i',
      startDate: '+3d'
  })
  $('.select2').select2({
    placeholder:"Please select here",
    width: "100%"
  })
</script>	
</html>

functions
<?php 
    require_once("db_connect.php");
	//echo 'Registration successful!!';
	
?>

<?php

   

function indexx($fullname, $password, $conn){
	
	$query = mysqli_query($conn, "SELECT * FROM users WHERE fullname='$fullname' AND password='$password'");
	// $query1 = mysqli_query($conn,"INSERT INTO `login_tb`( `fullname`, `password`) VALUES ('$fullname','$password')");

	$numrows = mysqli_num_rows($query);
	if($numrows !=0)
	{
		while($row = mysqli_fetch_assoc($query))
		{
			$dbusername=$row['fullname'];
			$dbpassword=$row['password'];
			$type=$row['type'];
			$id=$row['reg_id'];
		}
		$_SESSION['sess_user']=$fullname;
		$_SESSION['sess_eid']=$id;
		//Redirect Browser
		if($type=="admin"){
			header("Location: index.php?page=home");
		}
		else if($type=="user"){
		header("Location:userpage.php");
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

$query = mysqli_query($conn,"INSERT INTO users(fullname,  email, phone, password, gender, nationality,  type) VALUES('$fullname','$email','$phone','$hashedPassword','$gender','$nationality','$type')");
$query1 = mysqli_query($conn,"SELECT reg_id from users WHERE fullname='".$fullname."'");
$eid = mysqli_fetch_assoc($query1);
	
if($query){


	echo 'Registration successful!!';
	
	$_SESSION['sess_user'] = $fullname;
	$_SESSION['sess_eid'] = $eid['reg_id'];

	header("Location:indexx.php");
	echo 'Registration successful!!';
	exit;
}
else{
	echo "Query Error : " . "INSERT INTO users(fullname,  email, phone, password, gender, nationality,  type) VALUES('$fullname','$email','$phone','$hashedPassword','$gender','$nationality','$type')" . "<br>" . mysqli_error($conn);
	echo "<br>";
	echo "Query Error : " . "SELECT reg_id from users WHERE fullname='".$fullname."'" . "<br>" . mysqli_error($conn);
}

}


?>


indexx

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
    </style>
</head>
     

<body>

    <!-- header -->
    <nav class="navbar header-nav navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Online flight booking</a>

            <a id="register" href="signup.php">Sign Up</a>
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