<?php session_start() ?>
<html>
	<body>
			<?php 
			$cn=mysqli_connect("localhost","root","","vastra") or die ("check connection");
			$city_name=$_POST['city_name'];
			$city_id=$_POST['city_id'];
			$sql="update city set city_name='$city_name' where city_id=$city_id";
			$result=mysqli_query($cn,$sql);
			//$_SESSION['msg']="city inserted";
			//header("Location:city.php");
		?>
		<script>
			alert("city updated");
		
			
			location="city.php";
		</script>
		</body>
	</html>