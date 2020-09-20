<?php session_start() ?>
<html>
	<body>
		
		<?php
		$cn=mysqli_connect("localhost","root","","vastra") or die("Check Connection");
		if (isset($_POST['submit']))
		{
		$first_name=$_POST['first_name'];
		$last_name=$_POST['last_name'];
		$cityid1=$_POST['cityid'];
		$dob=$_POST['dob'];
		$contact_number=$_POST['phn'];
		
		$security_que=$_POST['security_que'];	
		$security_ans=$_POST['security_ans'];
		
		$password=$_POST['password'];
		$address=$_POST['address'];
		//$weight=$_POST['weight'];
		$email_id=$_POST['email_id'];
		$pincode=$_POST['pincode'];
		$gender=$_POST['gen'];
		
		
		//$user_name=$_POST['user_name'];
		
		?>
		<?php
				if(!preg_match("/^[A-Z][a-zA-Z -]+$/",$first_name))
			{
		?>
				<script type="text/javascript">alert("Enter valid firstname");
				location = "registration.php";
					</script>
			<?php
			}	
			else if(!preg_match("/^[A-Z][a-zA-Z -]+$/",$last_name))
			{
			?>
			<script type="text/javascript">alert("Enter valid lastname");
				location = "registration.php";
					</script>
			<?php
			}
			else if(!preg_match("/^\d{10}+$/",$contact_number))
			{
			?>
				<script type="text/javascript">alert("Enter valid contact number");
				location = "registration.php";
					</script>
			<?php
			
			}
			
			
			
			
					
			else
			{
				
					//echo "$weight";
					echo "$phn";
					echo "$first_name";
					echo "$last_name";
	echo "$dob";
	echo "$address";
	//echo "$pincode";
	echo "$email_id";
	echo "$password";
	
	echo "$security_que";
	echo "$security_ans";
	echo "$gender";
	$sql="insert into user (user_fname,user_lname,address,password,email_id,gender,security_que,security_ans,contact_number,pincode,city_id) values('$first_name','$last_name','$address','$password','$email_id','$gender','$security_que','$security_ans','$pincode','$contact_number','$cityid1')";
	
	$result=mysqli_query($cn,$sql);
		$_SESSION['msg']="registration is complete...";
		?>
		<script>
		location = "search_category.php";
		</script><?php
	//header("Location:get_product.php");
			}
		}
	?>
	
		
	</body>
</html>