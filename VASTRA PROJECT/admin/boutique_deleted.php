<?php session_start() ?>
<html>
	<body>
			<?php 
			$cn=mysqli_connect("localhost","root","","vastra") or die ("check connection");
			$boutique_id=$_GET['boutique_id'];
			$sql="Delete from boutique where boutique_id='$boutique_id'";
			$result=mysqli_query($cn,$sql);
			//$_SESSION['msg']="boutique deleted";
			
		?>
		<script>
			alert("boutique deleted");
		
			//$_SESSION['msg']="boutique deleted";
			location="boutique.php";
		
		</script>
		</body>
	</html>