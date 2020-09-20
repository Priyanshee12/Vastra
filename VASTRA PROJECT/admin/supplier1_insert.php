<?php session_start()?>
<html>
	<body>
			<?php 
			$cn=mysqli_connect("localhost","root","","vastra") or die ("check connection");
			
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
			$sql="insert into supplier1 (supplier_name,supplier_address,email_id,phone_number,account_number,bank_name,ifsc_code,branch_name,city_id,boutique_id)values ('$supplier_name','$supplier_address','$email_id','$phone_number','$account_number','$bank_name','$ifsc_code','$branch_name','$city_id','$boutique_id')";
			echo $sql;
			$result=mysqli_query($cn,$sql);
			echo $result;
			$_SESSION['msg']="supplier1 inserted";
			header("Location:supplier1.php");
		?>
		</body>
	</html>