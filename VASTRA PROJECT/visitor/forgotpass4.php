<?php session_start() ?>

		<?php
			$cn=mysqli_connect("localhost","root","","vastra") or die("Check connection");
			$email1=$_POST['email'];
			$secans=$_POST['ans'];
			$sql="select email_id from user where email_id = '$email1'";
			$sql1="select security_ans from user where email_id = '$email1'";
			$result=mysqli_query($cn,$sql);
			$result1=mysqli_query($cn,$sql1);
			$rec=mysqli_fetch_array($result);
			$rec1=mysqli_fetch_array($result1);
			if($email1==$rec['email_id'] && $secans==$rec1['security_ans']) 
			{
					echo $rec['email'];
					echo $rec1['secans'];
					
					$sql2="select password from user where email_id = '$email1' and security_ans='$secans'";
					
					$result3=mysqli_query($cn,$sql2);
					$rec3=mysqli_fetch_array($result3);
				?>
					<script type="text/javascript">alert("Your current password is : <?php echo $rec3[0];?>");
				location = "login.php";
				</script>
		<?php
		}
			else
			{
		?>
					<script type="text/javascript">alert("Enter correct details");
				location = "forgotpass.php";
				</script>
			<?php
			}	
		?>
	
		