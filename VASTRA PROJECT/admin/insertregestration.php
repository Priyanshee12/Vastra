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
		$user_name=$_POST['user_name'];
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
	echo "$user_name";
		$sql="insert into registration(first_name,last_name,dob,address,pincode,email_id,password,gender,security_que,security_ans,user_type,city_id) values('$first_name','$last_name','$dob','$address','$pincode','$email_id','$password','$gender','$security_que','$security_ans','customer','$city_id')";
		$result=mysqli_query($cn,$sql);
		//$_SESSION['msg']="regestration is complete...";
		header("Location:regestration.php");
		?>
	</body>
</html>
	