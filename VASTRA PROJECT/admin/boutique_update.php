<?php session_start() ?>
<html>
	<body>
			<?php 
			$cn=mysqli_connect("localhost","root","","vastra") or die ("check connection");
			$boutique_id=$_POST['boutique_id'];
			$boutique_name=$_POST['boutique_name'];
			$address=$_POST['address'];
			$contact_number=$_POST['contact_number'];
			$email_id=$_POST['email_id'];
			$city_id=$_POST['city_id'];
			$sql="update boutique set boutique_name='$boutique_name',address='$address',contact_number='$contact_number',email_id='$email_id',city_id='$city_id' where boutique_id='$boutique_id'";
			$result=mysqli_query($cn,$sql);
			//$_SESSION['msg']="boutique inserted";
			//header("Location:boutique.php");
		?>
		<script>
			alert("boutique updated");
		
			
			location="boutique.php";
		</script>
		</body>
	</html>