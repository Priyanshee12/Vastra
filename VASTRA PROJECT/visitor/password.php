<?php session_start() ?>
<html>
	<body>
		<?php
			$cn=mysqli_connect("localhost","root","","vastra") or die("Check connection");
			$email1=$_POST['email'];
			$old=$_POST['old'];
			$old1=$_POST['old1'];
			$old2=$_POST['old2'];
			//echo "$email";
			$sql="select user_id,password,email_id from user where email_id='$email1'";
			//echo "$pass1";
			$result=mysqli_query($cn,$sql);
			$rec=mysqli_fetch_array($result);
			
			$count=mysqli_num_rows($result);	
		//	mysqli_close($cn);
		// header("Location:forgot3.php");
		?>
		<?php
		if($email1!=$rec['email_id'])
		{
		?>
				<script type="text/javascript">alert("Enter correct email");
				location = "changepass.php";
				</script>
				
		<?php
		}	
		?>
		<?php
		if($old1!=$old2)
		{
		?>
				<script type="text/javascript">alert("Enter same password in both the fields");
				location = "changepass.php";
				</script>
		<?php	
		}
		?>
		<?php
		if($old!=$rec['password'])
		{
		?>
				<script type="text/javascript">alert("Enter current existing password");
				location = "changepass.php";
				</script>	
		<?php
		}
		
		else
		{
			?>
			<?php
			
				$sql="update user set password='$old1' where email_id='$email1'";
				$result=mysqli_query($cn,$sql);
		?>
			
				<script type="text/javascript">alert("Congratulations!Your Password has been successfully changed.");
				location = "login.php";
				</script>
		<?php
		}
		?>
	</body>
</html>