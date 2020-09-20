<?php session_start() ?>
<html>
	<body>
			<?php 
			$cn=mysqli_connect("localhost","root","","vastra") or die ("check connection");
			$date1=$_POST['date1'];
			$time1=$_POST['time1'];
			$description=$_POST['description'];
			$id=$_POST['id'];
			$order_id=$_POST['order_id'];
			echo "$id";
			$sql="insert into product_alteration(date,time,description,product_id,order_id)values ('$date1','$time1','$description','$id','$order_id')";
			$result=mysqli_query($cn,$sql);
			$_SESSION['msg']="product_alteration is inserted";
			header("Location:product_alteration.php");
		?>
		</body>
	</html>