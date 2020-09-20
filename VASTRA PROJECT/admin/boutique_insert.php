<?php session_start() ?>
<html>
	<body>
			<?php 
			$cn=mysqli_connect("localhost","root","","vastra") or die ("check connection");
			$boutique_name=$_POST['boutique_name'];
			$address=$_POST['address'];
			$contact_number=$_POST['contact_number'];
			$email_id=$_POST['email_id'];
			$city_id=$_POST['city_id'];
			$sql="insert into boutique(boutique_name,address,contact_number,email_id,city_id)values ('$boutique_name','$address','$contact_number','$email_id','$city_id')";	
			$result=mysqli_query($cn,$sql);
			$_SESSION['msg']="boutique inserted";
			header("Location:boutique.php");
			
		?>
		</body>
	</html>