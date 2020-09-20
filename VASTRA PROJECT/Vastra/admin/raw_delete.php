<?php session_start() ?>
<html>
	<body>
			<?php 
			$cn=mysqli_connect("localhost","root","","vastra") or die ("check connection");
			$rawmaterial_id=$_GET['rawmaterial_id'];
			$sql="Delete from raw_material where rawmaterial_id='$rawmaterial_id'";
			$result=mysqli_query($cn,$sql);
			$_SESSION['msg']="raw material deleted";
			header("Location:raw_mate.php");
		?>
		</body>
	</html>