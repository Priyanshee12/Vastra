<?php session_start() ?>
<html>
	<body>
		
		<?php
		$cn=mysqli_connect("localhost","root","","vastra") or die("Check Connection");

		$first_name=$_POST['first_name'];
		$last_name=$_POST['last_name'];
		$dob=$_POST['dob'];
		$address=$_POST['address'];
		$pincode=$_POST['pincode'];
		$email_id=$_POST['email_id'];
		$password=$_POST['password'];
		$gender=$_POST['gen'];
		$security_que=$_POST['security_que'];
		$security_ans=$_POST['security_ans'];
		$contact_number=$_POST['contact_number'];
		
		$city_id=$_POST['city_id'];

	echo "$first_name";
	echo "$last_name";
	echo "$dob";
	echo "$address";
	echo "$pincode";
	echo "$email_id";
	echo "$password";
	echo "$gender";
	echo "$security_que";
	echo "$security_ans";
	
	
	$sql="insert into user(user_fname,user_lname,email_id,contact_number,address,city_id,password,security_que,gender,security_ans,pincode) values('$first_name','$last_name','$email_id','$contact_number','$address','$city_id','$password','$security_que','$gender','$security_ans','$pincode')";
echo $sql;
	
	$result=mysqli_query($cn,$sql);
echo $result;	
	$_SESSION['msg']="regestration is complete...";
		header("Location:regitration.php");
		?>
	</body>
</html>
	