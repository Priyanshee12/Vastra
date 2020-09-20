<?php
require './class/connection.php';
if(!$connection)
{
die("connection failed:".mysql_connect_error());
}
else{
  $area_id=$_GET["area_id"];
$user_name=$_POST["user_name"];
$email=$_POST["email"];
$pho_no=$_POST["pho_no"];
$address=$_POST["address"];
$dob=$_POST["dob"];
$password=md5($_POST["password"]);
$sqa=mysqli_real_escape_string($connection,$_POST["security_que"]);
$sea=mysqli_real_escape_string($connection,$_POST["security_ans"]);
$sql=  "INSERT INTO `user` (`user_id`,`area_id`,`user_name`,`pho_no`,`address`,`email`,`dob`,`password`,`security_que`,`security_ans`) values "."(NULL,'$area_id','$username','$user_name','$pho_no','$address','$dob','$password','$sqa','$sea')"or die(mysqli_error($connection));
$result=mysqli_query($connection,$sql);
if ($result)
{
  echo "<script>alert ('Record inserted');</script>";
}
else {
  echo "error" .mysqli_error($connection);
}
}
 ?>

<html>

<title>REGISTRATION FORM </title>
<head>
<script type="text/javascript">
function validateForm(){
	var username=document.signin.user_name.value;
	var email=document.signin.email.value;
	var phono=document.signin.pho_no.value;
	var address=document.signin.address.value;
	var dob=document.signin.dob.value;
	var password=document.signin.password.value;
	var sea=document.signin.security_ans.value;
	var repass,sqa;
if(user_name=""){
document.getElementById("sNotice").innerHTML="Field id empty";
return false;
}
if(email=""){
document.getElementById("sNotice").innerHTML="Field id empty";
return false;
}
if(pho_no=""){
document.getElementById("sNotice").innerHTML="Field id empty";
return false;
}
if(address=""){
document.getElementById("sNotice").innerHTML="Field id empty";
return false;
}
if(dob=""){
document.getElementById("sNotice").innerHTML="Field id empty";
return false;
}
if(password=""){
document.getElementById("sNotice").innerHTML="Field id empty";
return false;
}
if(security_ans=""){
document.getElementById("sNotice").innerHTML="Field id empty";
return false;
}
if(password!==repass){
document.getElementById("sNotice").innerHTML="Field id empty";
return false;
}
}
</script>
</head>
<body>
<style>
      body{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
	background: #8395a7;
        }
	.box{
		width: 500px;
		padding: 40px;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);
		background: #ff7979;
		text-align: center;
	}
	.box input[type="email"],.box input[type="password"],.box input[type="text"],.box input[type="date"],.box input[type="textarea"],.box select
	{
		border: 0;
		background: none;
		display: block;
		margin: 1px auto;
		text-align: center;
		color: #2c3e50;
		border: 2px solid #3498db;
		padding: 14px 10px;
		width: 200px;
		outline: none;
		border-radius: 24px;
		transition: 0.25s;
	}
	.box h1{
		color: black;
		text-transform: uppercase;
		form-weight: 500;
	}
	.box styled-input{
color: white;
}
	.box input[type="email"]:focus,.box input[type="password"]:focus,.box input[type="text"]:focus,.box input[type="textarea"]:focus,.box input[type="date"]:focus,.box select:focus{
	width: 230px;
	border-color: #2ecc71;
}
	.box input[type="submit"]
	{
		border: 0;
		background: none;
		display: block;
		margin: 20px auto;
		text-align: center;
		border: 2px solid #2ecc71;
		padding: 20px 40px;
		outline: none;
		color: black;
		border-radius: 24px;
		transition: 0.25s;
		cursor: pointer;
	}
	.box input[type="submit"]:hover{
		background: #2ecc71;
	}

      .login-page{
        width:360px;
        padding: 10% 0 0;
        margin:auto;
      }

      .form{
        position:relative;
        z-index: 1;

        max-width: 360px;
        margin: 0 auto 100px;
        padding: 45px;
        text-align: center;
      }

      .form input{
        font-family: "r=Roboto", sans-serif;
        outline: 1;
        background:#f2f2f2;
        width:100%;
        border: 0;
        margin:0 0 15px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;
      }

      .form button{
        font-family: "Roboto",sans-serif;
        text-transform: uppercase;
        outline: 0;
        background: #4CAF50;
        width: 100%;
        border: 0;
        padding: 25px;
        color: #FFFFFF;
        font-size: 14px;
        cursor: pointer;

      }

      .form button:hover,.form button:active{
        background: #43A047;
      }

      .form .message{
        margin: 15px 0 0;
        color: aliceblue;
        font-size: 12px;

      }

      .form .message a {
        color: #4CAF50;
        text-decoration: none;

      }

      .form .register-form{
        display: none;
      }
</style>
<?php
        // include 'header.php';
        ?>

        <!-- //banner-top -->
        <!-- Modal1 -->

        <!-- //Modal1 -->
        <!-- Modal2 -->

        <!-- //Modal2 -->
        <!-- /banner_bottom_agile_info -->
        <div class="page-head_agile_info_w3l">
            <div class="container">
                <!-- <h3>Login<span> </span></h3> -->
                <!--/w3_short-->
                <div class="services-breadcrumb">
                    <div class="agile_inner_breadcrumb">

                        <!-- <ul class="w3_short">
                            <li><a href="i#">Home</a><i>|</i></li>
                            <li>Login</li>
                        </ul> -->
                    </div>
                </div>
                <!--//w3_short-->
            </div>
        </div>
        <!--/contact-->


        <div class="banner_bottom_agile_info">
            <div class="container">
                <div class="agile-contact-grids">
                    <div class="agile-contact-left">
                        <div class="col-lg-3"></div>
                        <div style="" class="col-md-6 contact-form">
                           <center>




<div class="register">
<form name="signin"class="box"action="registration.php" method="post"onsubmit="retrurn validateForm()">
<table>


    <!-- <th aligncenter>Login Form</th> -->
	<center><h1>Create an account</h1></center>
<tr>
   <div class="styled-input">
  <td>User Name</td>
  <td>
    <input type="text" name="user_name" required="">
  </td>
   </div>
  </tr>
  <tr>
   <div class="styled-input">
  <td>Email</td>
  <td>
    <input type="email" name="email" required="">
  </td>
   </div>
  </tr>

<tr>
<div class="styled-input">
<td>Password</td>
<td>
  <input type="password" name="password" required="">
</td>
</div>
</tr>

<tr>
<div class="styled-input">
<td>Confirm Password</td>
<td>
  <input type="password" name="repass" required="">
</td>
</div>
</tr>

<tr>
<div class="styled-input">
<td>Address</td>
<td>
  <input type="textarea" name="address" required="">
</td>
</div>
</tr>

<tr>
 <div class="styled-input">
<td>Area</td>
				<td>
          <?php

              echo "Area<br/> <select name='area_name'><br/><br/><br/>";
              $qq = mysqli_query($connection, "select area_name from area ") or die(mysqli_error($connection));
              while($areada = mysqli_fetch_array($qq))
              {
                  echo "<option value='{$areada[0]}'>$areada[1]</option>";
              }

              echo "</select>";
              ?>
				</td>
     </div>
</tr>
 </div>

<tr>
   <div class="styled-input">
  <td>Phone Number</td>
  <td>
    <input type="text" name="pho_no" required="">
  </td>
   </div>
  </tr>

<tr>
   <div class="styled-input">
  <td>DOB</td>
  <td>
    <input type="date" name="dob" required="">
  </td>
   </div>
  </tr>

<tr>
<div class="styled-input">
<td>Security Question</td>
<td><select name="security_que">
<option>What is your favourite color ?</option>
<option>What is your favourite place ?</option>
<option>What is your vehicle number ?</option>
<option>What is your first school's name ?</option>
</select></td>
</div>
</tr>


<tr>
   <div class="styled-input">
  <td>Security Answer</td>
  <td>
    <input type="text" name="security_ans" required="">
  </td>
   </div>
  </tr>
<table>
  <tr><center>
    <td>
      <center>
        <input type="submit" value="SUBMIT">
      </center>
</td>
    </center>
  </tr>

</table>



</table>
</form>
<div id

                                <!-- <br/><a href="signup.php">Create a Free Account.</a>
                                <br/><a href="forgot-password.php">Forgot Password?</a> -->
                            </form>
</div>
</body>
</html>
