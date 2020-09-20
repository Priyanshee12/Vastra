<?php session_start() ?>
<html>
	<body>
		<?php
			$cn=mysqli_connect("localhost","root","","vastra") or die("Check connection");
			$feedback_id=$_GET['feedback_id'];
			$sql="delete from feedback where feedback_id='$feedback_id'";
			$result=mysqli_query($cn,$sql);
			$_SESSION['msg']="feedback Deleted";
			header("Location:feedback.php");
		?>
	</body>
</html>