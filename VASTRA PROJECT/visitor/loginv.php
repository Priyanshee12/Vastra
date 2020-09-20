<?php session_start() ?>
<html>
	<body>
		<?php
			$cn=mysqli_connect("localhost","root","","vastra") or die("Check connection");
			$email=mysqli_real_escape_string($cn,$_POST['email']);
			$pass=mysqli_real_escape_string($cn,$_POST['pass']);
			$sql="select user_fname from user where email_id='$email' and password='$pass'";
			$result=mysqli_query($cn,$sql);
			$row = mysqli_fetch_array($result);
			$user_fname=$row[0];
			
			$sql1="select user_id from user where email_id='$email' and password='$pass'";
			$result1=mysqli_query($cn,$sql1);
			$row1 = mysqli_fetch_array($result1);
			$user_id=$row1[0];
			
			
			$count=mysqli_num_rows($result);
			//echo $count;
			if($count==1){
				$_SESSION['user_fname']=$user_fname;
				$_SESSION['user_id']=$user_id;
				echo "$user_id";
			?>
			<script>
				alert("congrtats! u have logged in successfully.");
			location = "../customer/get_product.php";
				</script>
			<?php
			}
			else
			{
			?>
				<script>
				alert("Enter correct details");
				location = "login.php";
				</script>
				
		<?php
		}
		?>
	</body>
</html>



