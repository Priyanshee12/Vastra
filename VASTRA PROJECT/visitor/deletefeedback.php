<?php session_start() ?>
<html>
	<body>
		<?php
			$cn=mysqli_connect("localhost","root","","recreate") or die("Check connection");
			$fid=$_GET['fid'];
			$sql="delete from feedback where fid='$fid'";
			$result=mysqli_query($cn,$sql);
			$_SESSION['msg']="feedback Deleted";
			header("Location:feedback.php");
		?>
	</body>
</html>