<?php session_start() ?>
<html>
	<body>
			<?php 
			$cn=mysqli_connect("localhost","root","","vastra") or die ("check connection");
			$id=$_GET['id'];
			$sql="Delete from product where id='$id'";
			$result=mysqli_query($cn,$sql);
			$_SESSION['msg']="product deleted";
			header("Location:product.php");
		?>
		</body>
	</html>