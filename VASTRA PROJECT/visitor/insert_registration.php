<?php session_start() ?>
<html>
	<body>
		
		<?php
		$cn=mysqli_connect("localhost","root","","vastra") or die("Check Connection");
		$product_id=$_POST['product_id'];
		$user_fname=$_POST['user_fname'];
		$user_lname=$_POST['user_lname'];
		$email_id=$_POST['email_id'];
		$contact_number=$_POST['contact_number'];
		$address=$_POST['address'];
		$city_id=$_POST['city_id'];
		$password=$_POST['password'];
		$security_que=$_POST['security_que'];
		$security_ans=$_POST['security_ans'];
		$pincode=$_POST['pincode'];
		$gender=$_POST['gen'];

	echo "$product_id";
	echo "$user_fname";
	echo "$user_lname";
	echo "$email_id";
	echo "$contact_number";
	echo "$address";
	echo "$city_id";
	echo "$password";
	echo "$security_que";
	echo "$security_ans";
	echo "$pincode";
	echo "$gender";
	
		$sql="insert into user(product_id,user_fname,user_lname,email_id,contact_number,address,city_id,password,security_que,security_ans,pincode,gender) values('$product_id','$user_fname','$user_lname','$email_id',$contact_number','$address','$city_id','$password','$security_que','$security_ans','$pincode','$gender')";
		$result=mysqli_query($cn,$sql);
		//$_SESSION['msg']="regestration is complete...";
		//header("Location:registration.php");
		?>
	</body>
</html>
	