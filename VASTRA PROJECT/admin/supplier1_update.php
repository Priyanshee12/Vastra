<?php session_start() ?>
<html>
	<body>
			<?php 
			$cn=mysqli_connect("localhost","root","","vastra") or die ("check connection");
			$supplier_id=$_POST['supplier_id'];
			$supplier_name=$_POST['supplier_name'];
			$supplier_address=$_POST['supplier_address'];
			$email_id=$_POST['email_id'];
			$phone_number=$_POST['phone_number'];
			$account_number=$_POST['account_number'];
			$bank_name=$_POST['bank_name'];
			$ifsc_code=$_POST['ifsc_code'];
			$branch_name=$_POST['branch_name'];
			$city_id=$_POST['city_id'];
			$boutique_id=$_POST['boutique_id'];
			$sql="update supplier1 set supplier_name='$supplier_name',supplier_address='$supplier_address',email_id='$email_id',phone_number='$phone_number',account_number='$account_number',bank_name='$bank_name',ifsc_code='$ifsc_code',branch_name='$branch_name',city_id='$city_id',boutique_id='$boutique_id' where supplier_id='$supplier_id'";
			$result=mysqli_query($cn,$sql);
			//$_SESSION['msg']="supplier1 inserted";
			//
		?>
		<script>
			alert("supplier updated");
		
			//$_SESSION['msg']="supplier updated";
			location="supplier1.php";
		</script>
		</body>
	</html>