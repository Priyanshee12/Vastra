<?php session_start() ?>
<?php include_once("inc/header.php");

?>
<html>
<body>
	<table border=1 align="center">
		<h1 align="center">Registration  User</h1>
	<form action="" method="post">
	<tr>
			<td>First Name</td>
			<td><input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) { echo $_POST['first_name'];}?>" required></input></td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td><input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) { echo $_POST['last_name'];}?>" required></input></td>
		</tr>
		<tr>
			<td>dob</td>
			<td><input type="date" name="dob" value="<?php if(isset($_POST['dob'])) { echo $_POST['dob'];}?>" required></input></td>
		</tr><tr>
			<td>Address</td>
			<td><textarea name="address" value="<?php if(isset($_POST['address'])) { echo $_POST['address'];}?>" required></textarea></td>
		</tr>
		<tr>
			<td>City</td>
			<td>
                            <select name="cityid">
                                <?php
                                $cn=mysqli_connect("localhost","root","","vastra") or die(mysqli_eroor());
                                $sql="select * from city";
                                $res=mysqli_query($cn,$sql);
                                while($arr=mysqli_fetch_array($res)){
                                    ?>
                                <option value="<?php echo $arr['city_id'] ?>"><?php echo $arr['city_name'] ?></option>
                <?php
                                }
                                mysqli_close($cn);
                                ?>
                                </select>
                                
                                
                        </td>
		</tr>
		<tr>
			<td>Mobile Number</td>
			<td><input type="text" name="contact_number" value="<?php if(isset($_POST['contact_number'])) { echo $_POST['contact_number'];}?>" required></input></td>
		</tr>
		

		<tr>
			<td>Email id</td>
			<td><input type="email" name="email_id" value="<?php if(isset($_POST['email_id'])) { echo $_POST['email_id'];}?>" required></input></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" required></input></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td><input type="radio" name="gen" value="male" checked="true">male</input>
			<input type="radio" name="gen" value="female">female</input></td>
		</tr>
		<tr>
			<td>Security Question</td>
			<td><select name="security_que" >
			<option value="what is your favourite color">what is your favourite color</option>
			<option value="what is your favourite car">what is your favourite car</option>
			<option value="what is your favourite country">what is your favourite country</option>
			</select>
			</td>
		</tr>
		
		<tr>
			<td>Pincode</td>
			<td><input type="text" name="pincode" required="" ></input></td></br>
		</tr>
		<tr>
			<td>Security Answer</td>
			<td><input type="text" name="security_ans" value="<?php if(isset($_POST['security_ans'])) { echo $_POST['security_ans'];}?>" required></input></td></br>
		</tr>
		<tr>
			
			<td colspan = "2" align="center"> <input type="submit" value="submit" name="submit"> </td>
		</tr>
	</form>
	</table>
	<table align="center">
<tr>
</table>

	<?php
		$cn=mysqli_connect("localhost","root","","vastra") or die("Check Connection");
		if(isset($_POST['submit']))
		{
			$first_name=$_POST['first_name'];
		$last_name=$_POST['last_name'];
		$cityid1=$_POST['cityid'];
		$dob=$_POST['dob'];
		$contact_number=$_POST['contact_number'];
		
		$security_que=$_POST['security_que'];	
		$security_ans=$_POST['security_ans'];
		
		$password=$_POST['password'];
		$address=$_POST['address'];
		//$weight=$_POST['weight'];
		$email_id=$_POST['email_id'];
		$pincode=$_POST['pincode'];
		$gender=$_POST['gen'];
			
			
			//$email_id=$_POST['email_id'];
	?>
	<?php
		if(!preg_match("/^[a-zA-Z]+$/",$first_name	))
		{
	?>
		<script type="text/javascript">alert("Name must contain alphabets only!!");
		//location = "registration1.php";
		</script>
	<?php
		}
		else if(!preg_match("/^[a-zA-Z]+$/",$last_name))
			{
				?>
				<script type="text/javascript">alert("Last Name must contain alphabets only!!");
				//location = "registration1.php";
					</script>
					<?php
			}
			else if(!preg_match("/^\d{10}+$/",$contact_number))
			{
			?>
	<script type="text/javascript">alert("Enter valid contact number");
				//location = "registration1.php";
					</script>
			<?php
			}
			else if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])(?=.*[!@#$%])[0-9A-Za-z!@#$%]{6,15}$/',$password))
				{
				?>
					<script type="text/javascript">alert("Password must contain 6 characters of letters, numbers and at least one special character.");
						//location = "registration1.php";
					</script>
				<?php
			}			
			else if(!filter_var($email_id,FILTER_VALIDATE_EMAIL))
				{
					
					
					?>
					<script type="text/javascript">alert("Enter valid email");
				//location = "registration.php";
					
					</script>
					<?php
				}
				else if($email_id==$rec['email'])
				{
					?>
					<script type="text/javascript">alert("Email already exists");
				//location = "registration.php";
					
					</script>
					<?php
				}
		else
		{
					echo "$contact_number";
					echo "$first_name";
					echo "$last_name";
	echo "$dob";
	echo "$address";
	echo "$pincode";
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
<?php include_once("inc/footer.php");
?>