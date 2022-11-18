<?php 
require_once("db_connect.php");
include("functions.php");
session_start();
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <title>Sign Up</title>
  <style>
    h1 {
      text-align: center;
      font-size: 2.5em;
      font-weight: bold;
      padding-top: 1.2em;
    }

    form {
      padding: 40px;
    }

    input,
    textarea {
      margin: 5px;
      font-size: 1.1em !important;
      outline: none;
    }

    input[type=radio],
    select {
      width: max-content;
      padding: 5px;
      margin-top: 20px;
      margin-bottom: 20px;
      margin-left: 30px;
      margin-right: 5px;
    }

    textarea {
      height: 80px;
    }

    #err {
      display: none;
      padding: 1.5em;
      padding-left: 4em;
      font-size: 1.2em;
      font-weight: bold;
      margin-top: 1em;
    }

    .error {
      color: #FF0000;
    }
    navbar.a{
color:black;

    }
    body{
      
      
      background: url(../pictures/t2.jpg) no-repeat center;
  
  
          
  
          
          
    }
  </style>

</head>

<body>
<!-- php code -->
  <?php
  $fullnameErr = $emailErr = $phoneErr = $passwordErr = $repasswordErr = $genderErr = "";
  $fullname  = $email = $phone = $password = $repassword = $gender = $nationality= $passportnumber = "";
  global $validate;

  if(isset($_POST['submit'])){

    if(empty($_POST['fullname'])){
      $fullnameErr = "Please Enter valid name";
      $validate = false;
    }
    else{
      $fullname = mysqli_real_escape_string($conn,$_POST['fullname']);
      $validate = true;
      
    }

    //if(empty($_POST['username'])){
     // $nameErr = "Please Enter Username";
     // $validate = false;
    //}
    //else{
      //$name = mysqli_real_escape_string($conn,$_POST['name']);
      //$validate = true;
    //}
    //if(empty($_POST['type'])){
      //$nameErr = "Please Enter type";
      //$validate = false;
    //}
    //else{
      //$type = mysqli_real_escape_string($conn,$_POST['type']);
      //$validate = true;
    //}
    if(empty($_POST['email'])){
      $emailErr = "Please Enter Email";
      $validate = false;
    }
    else{
      $email = mysqli_real_escape_string($conn,$_POST['email']);
      $validate = true;
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailErr = "Please Enter valid email";
        $validate = false;
      }
    }

    if(empty($_POST['phone'])){
      $phoneErr = "Please Enter Phone Number";
      $validate = false;
    }
    else{
      $phone = mysqli_real_escape_string($conn,$_POST['phone']);
      $validate = true;
      if(strlen($phone) > 10 || strlen($phone) < 10 || !preg_match("/[0-9]/",$phone)){
        $phoneErr = "Please Enter valid Phone Number";
        $validate = false;
      }
    }

    if(empty($_POST['password'])){
      $passwordErr = "Please Enter Password";
      $validate = false;
    }
    else{
      $password = mysqli_real_escape_string($conn,$_POST['password']);
      $validate = true;
    }

    if(empty($_POST['repassword'])){
      $repasswordErr = "Please Enter re-password";
      $validate = false;
    }
    else{
      $repassword = mysqli_real_escape_string($conn,$_POST['repassword']);
      $validate = true;
      if($password !== $repassword){
        $repasswordErr = "Password and Confirm Password don't match";
        $validate = false;
      }
    }

    if(empty($_POST['gender'])){
      $genderErr = "Please Select Gender";
      $validate = false;
    }
    else{
      $gender = mysqli_real_escape_string($conn,$_POST['gender']);
      $validate = true;
    }

    $nationality = $_POST['nationality'];
   // $passportnumber = $_POST['passportnumber'];
    $type = 'user';
  
 
    if($validate){
      signup($fullname,$email,$phone,$password,$repassword,$gender,$nationality,$type,$conn);
    }
  }

ini_set('display_errors', true);
error_reporting(E_ALL);
  ?>


  <!-- navbar -->
  <nav class="navbar header-nav navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Online flight booking </a>

      <a id="register" href="index1.php">home</a>
    </div>
  </nav>

  <h1>Registration Form</h1>

  <div class="container">
    <div class="alert alert-danger" id="err" role="alert">
    </div>
  
    <!--form-->
    <form method="POST" autocomplete="off">
  
      <!--Name-->
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="fullname"  id="fullname" value="<?php echo $fullname; ?>" placeholder="Fullname" required onchange="Validname()">
        <label for="Fullname">Fullname</label>
        <span class="error"><?php echo $fullnameErr; ?></span>
      </div>
      <span id="msg7" style="color:red;"></span>
                        <script>
                        function Validname() 
                        {
                        var val = document.getElementById('fullname').value;
                          if (!val.match(/^[A-Za-z]/))
                           {
                            document.getElementById('msg7').innerHTML="Use only letters";
                                  document.getElementById('fullname').value = "";
                                    return false;
                           }
                            document.getElementById('msg7').innerHTML=" ";
                          return true;
                        }
                       </script>
      <!--username-->
      <!--<div class="form-floating mb-3">
        <input type="text" class="form-control" name="name" id="name" value="<?php echo $name; ?>"placeholder="Username">
        <label for="name">Username</label>
        <span class="error"></span>
      </div>-->
  
      <!--Email id-->
      <div class="form-floating mb-3">
        <input class="form-control" type="text" name="email" id="email" value="<?php echo $email; ?>" placeholder="Enter your email" required onchange="Validemail()">
        <label for="email">Email address</label>
        <span class="error"><?php echo $emailErr; ?></span>
      </div>
      <span id="msg8" style="color:red;"></span>
                        <script>
                        function Validemail() 
                        {
                        var val = document.getElementById('email').value;
                          if (!val.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/))
                           {
                            document.getElementById('msg8').innerHTML="Enter valid email";
                                  document.getElementById('email').value = "";
                                    return false;
                           }
                            document.getElementById('msg8').innerHTML=" ";
                          return true;
                        }
                       </script>
  
      <!--Phone No.-->
      <div class="form-floating mb-3">
        <input class="form-control" type="tel" name="phone" id="phone"  value="<?php echo $phone; ?>" placeholder="Enter your Phone no." required onchange="Validphone()">
        <label for="phone">Phone No.</label>
        <span class="error"><?php echo $phoneErr; ?></span>
      </div>
      <span id="msg10" style="color:red;"></span>
                        <script>
                        function Validphone() 
                        {
                        var val = document.getElementById('phone').value;
                          if (!val.match(/^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/))
                           {
                            document.getElementById('msg10').innerHTML="Only Numbers are allowed and must contain 10 number";
                                  document.getElementById('phone').value = "";
                                    return false;
                           }
                            document.getElementById('msg10').innerHTML=" ";
                          return true;
                        }
                       </script>
  
      <!--Password.-->
      <div class="form-floating mb-3">
        <input class="form-control" type="password" name="password" id="password" value="<?php echo $password; ?>" placeholder="Enter your password" required  onchange="Validpassword()" >
        <label for="password">Password</label>
        <span class="error"><?php echo $passwordErr; ?></span>
      </div>
      <span id="msg12" style="color:red;"></span>
                        <script>
                        function Validpassword() 
                        {
                        var val = document.getElementById('password').value;
                          if (!val.match(/^[A-Za-z]/))
                           {
                            document.getElementById('msg12').innerHTML="Enter address in correct format";
                                  document.getElementById('password').value = "";
                                    return false;
                           }
                            document.getElementById('msg12').innerHTML=" ";
                          return true;
                        }
                       </script>
                       
  
      <!--Confirm Password.-->
      <div class="form-floating mb-3">
        <input class="form-control" type="password" name="repassword" id="confirmPassword" value="<?php echo $repassword ?>" placeholder="Re-Enter password" >
        <label for="confirmPassword">Confirm Password</label>
        <span class="error"><?php echo $repasswordErr; ?></span>
      </div>

      
  
      <label for="gender">Gender:</label>
      <input type="radio" id="gender" name="gender" <?php if(isset($gender)&&$gender=="Male") echo "checked" ?> value="Male">Male
      <input type="radio" id="gender" name="gender" <?php if(isset($gender)&&$gender=="Female") echo "checked" ?> value="Female">Female
      <input type="radio" id="gender" name="gender" <?php if(isset($gender)&&$gender=="others") echo "checked" ?> value="others">others
      <span class="error"><?php echo $genderErr; ?></span>
      <br>
  
      <div class="row">
  
      <div class="col-5">
      <label for="nationality">nationality:</label>
      <select id="nationality" name="nationality">
      <option value="select an option">select an option</option>
      <option value="afghan">Afghan</option>
  <option value="albanian">Albanian</option>
  <option value="algerian">Algerian</option>
  <option value="american">American</option>
  <option value="andorran">Andorran</option>
  <option value="angolan">Angolan</option>
  <option value="antiguans">Antiguans</option>
  <option value="argentinean">Argentinean</option>
  <option value="armenian">Armenian</option>
  <option value="australian">Australian</option>
  <option value="austrian">Austrian</option>
  <option value="azerbaijani">Azerbaijani</option>
  <option value="bahamian">Bahamian</option>
  <option value="bahraini">Bahraini</option>
  <option value="bangladeshi">Bangladeshi</option>
  <option value="barbadian">Barbadian</option>
  <option value="barbudans">Barbudans</option>
  <option value="batswana">Batswana</option>
  <option value="belarusian">Belarusian</option>
  <option value="belgian">Belgian</option>
  <option value="belizean">Belizean</option>
  <option value="beninese">Beninese</option>
  <option value="bhutanese">Bhutanese</option>
  <option value="bolivian">Bolivian</option>
  <option value="bosnian">Bosnian</option>
  <option value="brazilian">Brazilian</option>
  <option value="british">British</option>
  <option value="bruneian">Bruneian</option>
  <option value="bulgarian">Bulgarian</option>
  <option value="burkinabe">Burkinabe</option>
  <option value="burmese">Burmese</option>
  <option value="burundian">Burundian</option>
  <option value="cambodian">Cambodian</option>
  <option value="cameroonian">Cameroonian</option>
  <option value="canadian">Canadian</option>
  <option value="cape verdean">Cape Verdean</option>
  <option value="central african">Central African</option>
  <option value="chadian">Chadian</option>
  <option value="chilean">Chilean</option>
  <option value="chinese">Chinese</option>
  <option value="colombian">Colombian</option>
  <option value="comoran">Comoran</option>
  <option value="congolese">Congolese</option>
  <option value="costa rican">Costa Rican</option>
  <option value="croatian">Croatian</option>
  <option value="cuban">Cuban</option>
  <option value="cypriot">Cypriot</option>
  <option value="czech">Czech</option>
  <option value="danish">Danish</option>
  <option value="djibouti">Djibouti</option>
  <option value="dominican">Dominican</option>
  <option value="dutch">Dutch</option>
  <option value="east timorese">East Timorese</option>
  <option value="ecuadorean">Ecuadorean</option>
  <option value="egyptian">Egyptian</option>
  <option value="emirian">Emirian</option>
  <option value="equatorial guinean">Equatorial Guinean</option>
  <option value="eritrean">Eritrean</option>
  <option value="estonian">Estonian</option>
  <option value="ethiopian">Ethiopian</option>
  <option value="fijian">Fijian</option>
  <option value="filipino">Filipino</option>
  <option value="finnish">Finnish</option>
  <option value="french">French</option>
  <option value="gabonese">Gabonese</option>
  <option value="gambian">Gambian</option>
  <option value="georgian">Georgian</option>
  <option value="german">German</option>
  <option value="ghanaian">Ghanaian</option>
  <option value="greek">Greek</option>
  <option value="grenadian">Grenadian</option>
  <option value="guatemalan">Guatemalan</option>
  <option value="guinea-bissauan">Guinea-Bissauan</option>
  <option value="guinean">Guinean</option>
  <option value="guyanese">Guyanese</option>
  <option value="haitian">Haitian</option>
  <option value="herzegovinian">Herzegovinian</option>
  <option value="honduran">Honduran</option>
  <option value="hungarian">Hungarian</option>
  <option value="icelander">Icelander</option>
  <option value="indian">Indian</option>
  <option value="indonesian">Indonesian</option>
  <option value="iranian">Iranian</option>
  <option value="iraqi">Iraqi</option>
  <option value="irish">Irish</option>
  <option value="israeli">Israeli</option>
  <option value="italian">Italian</option>
  <option value="ivorian">Ivorian</option>
  <option value="jamaican">Jamaican</option>
  <option value="japanese">Japanese</option>
  <option value="jordanian">Jordanian</option>
  <option value="kazakhstani">Kazakhstani</option>
  <option value="kenyan">Kenyan</option>
  <option value="kittian and nevisian">Kittian and Nevisian</option>
  <option value="kuwaiti">Kuwaiti</option>
  <option value="kyrgyz">Kyrgyz</option>
  <option value="laotian">Laotian</option>
  <option value="latvian">Latvian</option>
  <option value="lebanese">Lebanese</option>
  <option value="liberian">Liberian</option>
  <option value="libyan">Libyan</option>
  <option value="liechtensteiner">Liechtensteiner</option>
  <option value="lithuanian">Lithuanian</option>
  <option value="luxembourger">Luxembourger</option>
  <option value="macedonian">Macedonian</option>
  <option value="malagasy">Malagasy</option>
  <option value="malawian">Malawian</option>
  <option value="malaysian">Malaysian</option>
  <option value="maldivan">Maldivan</option>
  <option value="malian">Malian</option>
  <option value="maltese">Maltese</option>
  <option value="marshallese">Marshallese</option>
  <option value="mauritanian">Mauritanian</option>
  <option value="mauritian">Mauritian</option>
  <option value="mexican">Mexican</option>
  <option value="micronesian">Micronesian</option>
  <option value="moldovan">Moldovan</option>
  <option value="monacan">Monacan</option>
  <option value="mongolian">Mongolian</option>
  <option value="moroccan">Moroccan</option>
  <option value="mosotho">Mosotho</option>
  <option value="motswana">Motswana</option>
  <option value="mozambican">Mozambican</option>
  <option value="namibian">Namibian</option>
  <option value="nauruan">Nauruan</option>
  <option value="nepalese">Nepalese</option>
  <option value="new zealander">New Zealander</option>
  <option value="ni-vanuatu">Ni-Vanuatu</option>
  <option value="nicaraguan">Nicaraguan</option>
  <option value="nigerien">Nigerien</option>
  <option value="north korean">North Korean</option>
  <option value="northern irish">Northern Irish</option>
  <option value="norwegian">Norwegian</option>
  <option value="omani">Omani</option>
  <option value="pakistani">Pakistani</option>
  <option value="palauan">Palauan</option>
  <option value="panamanian">Panamanian</option>
  <option value="papua new guinean">Papua New Guinean</option>
  <option value="paraguayan">Paraguayan</option>
  <option value="peruvian">Peruvian</option>
  <option value="polish">Polish</option>
  <option value="portuguese">Portuguese</option>
  <option value="qatari">Qatari</option>
  <option value="romanian">Romanian</option>
  <option value="russian">Russian</option>
  <option value="rwandan">Rwandan</option>
  <option value="saint lucian">Saint Lucian</option>
  <option value="salvadoran">Salvadoran</option>
  <option value="samoan">Samoan</option>
  <option value="san marinese">San Marinese</option>
  <option value="sao tomean">Sao Tomean</option>
  <option value="saudi">Saudi</option>
  <option value="scottish">Scottish</option>
  <option value="senegalese">Senegalese</option>
  <option value="serbian">Serbian</option>
  <option value="seychellois">Seychellois</option>
  <option value="sierra leonean">Sierra Leonean</option>
  <option value="singaporean">Singaporean</option>
  <option value="slovakian">Slovakian</option>
  <option value="slovenian">Slovenian</option>
  <option value="solomon islander">Solomon Islander</option>
  <option value="somali">Somali</option>
  <option value="south african">South African</option>
  <option value="south korean">South Korean</option>
      </select>
      </select>
      </div>
      
     
      </div>
  
      
  
      <br>
  
      <input type="submit" name="submit" value="Submit" class="btn btn-success">
    </form>
  </div>



  <!--Footer-->
  <footer class="footer navbar navbar-expand-lg navbar-light bg-light" style="color:yellow;">
  </footer>


</body>

</html>