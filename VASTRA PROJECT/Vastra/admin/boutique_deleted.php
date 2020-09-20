<?php session_start() ?>
<html>
	<body>
			<?php 
			$cn=mysqli_connect("localhost","root","","vastra") or die ("check connection");
			$city_id=$_GET['boutique_id'];
			$sql="Delete from city where boutique_id='$boutique_id'";
			$result=mysqli_query($cn,$sql);
			$_SESSION['msg']="boutique deleted";
			header("Location:boutique.php");
		?>
		</body>
	</html>