<?php session_start() ?>
<html>
	<body>
			<?php 
			$cn=mysqli_connect("localhost","root","","vastra") or die ("check connection");
			$id=$_POST['id'];
			$product_name=$_POST['product_name'];
			$product_price=$_POST['product_price'];
			$description=$_POST['description'];
			$product_size=$_POST['product_size'];
			$category_id=$_POST['category_id'];
			$quantity=$_POST['quantity'];
			
			$sql="update product set product_name='$product_name',product_price='$product_price',description='$description',product_size='$product_size',category_id='$category_id',quantity='$quantity'
			where id='$id'";
			$result=mysqli_query($cn,$sql);
			?>
		<script>
			alert("Product updated");
		
			//$_SESSION['msg']="product updated";
			location="product.php";
		
		</script>
		</body>
	</html>