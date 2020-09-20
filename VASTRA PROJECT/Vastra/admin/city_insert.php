<?php session_start() ?>
<html>
	<body>
			<?php 
			$cn=mysqli_connect("localhost","root","","vastra") or die ("check connection");
			$city_name=$_POST['cityname'];
			$sql="insert into city (city_name)values ('$city_name')";
			$result=mysqli_query($cn,$sql);
			$_SESSION['msg']="city inserted";
			header("Location:city.php");
		?>
		</body>
	</html>