<?php session_start() ?>
<html>
	<body>
			<?php 
			$cn=mysqli_connect("localhost","root","","vastra") or die ("check connection");
			$boutique_name=$_POST['city_name'];
			$boutique_id=$_POST['boutique_id'];
			$sql="update city set boutique_name='$boutique_name' where boutique_id=$boutique_id";
			$result=mysqli_query($cn,$sql);
			$_SESSION['msg']="boutique inserted";
			header("Location:boutique.php");
		?>
		</body>
	</html>