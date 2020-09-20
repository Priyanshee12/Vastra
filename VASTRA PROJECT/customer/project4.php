<?php session_start() ?>
<html>
	<body>
		<?php
			$cn=mysqli_connect("localhost","root","","vastra") or die("Check connection");
			$fdesc=$_POST['fdesc'];
			$user_id=$_SESSION['user_id'];
			echo "$user_id";
			echo "$fdesc";
			$sql="INSERT INTO feedback (message,entry_date,user_id) VALUES ('$fdesc', now(), '$user_id')";
			
			
			$result=mysqli_query($cn,$sql);
			
			$_SESSION['msg']="feedback  Inserted";
			header("Location:feedbackC.php");
		?>
	</body>
</html>