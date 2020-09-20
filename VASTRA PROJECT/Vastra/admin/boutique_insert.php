<?php session_start() ?>
<html>
	<body>
			<?php 
			$cn=mysqli_connect("localhost","root","","vastra") or die ("check connection");
			$city_name=$_POST['boutiquename'];
			$sql="insert into boutique (boutique_name)values ('$boutique_name')";
			$result=mysqli_query($cn,$sql);
			$_SESSION['msg']="boutique inserted";
			header("Location:boutique.php");
		?>
		</body>
	</html>