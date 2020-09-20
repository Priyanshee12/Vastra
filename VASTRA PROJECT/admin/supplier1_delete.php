<?php session_start() ?>
<html>
	<body>
			<?php 
			$cn=mysqli_connect("localhost","root","","vastra") or die ("check connection");
			$supplier_id=$_GET['supplier_id'];
			$sql="delete from supplier1 where supplier_id='$supplier_id'";
			$result=mysqli_query($cn,$sql);
			//$_SESSION['msg']="supplier deleted";
			//header("Location:supplier1.php");
		?>
		<script>
			alert("supplier deleted");
		
			$_SESSION['msg']="supplier deleted";
			location="supplier1.php";
		</script>
		</body>
	</html>