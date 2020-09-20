<?php session_start() ?>
<html>
	<body>
			<?php 
			$cn=mysqli_connect("localhost","root","","vastra") or die ("check connection");
			$subcategory_name=$_POST['subcategory_name'];
			$category_id=$_POST['category_id'];

			$sql="insert into sub_category (subcategory_name,category_id)values ('$subcategory_name','$category_id')";
		echo "$sql";
			$result=mysqli_query($cn,$sql);
			echo "$result";
			$_SESSION['msg']="sub_category inserted";
			header("Location:sub_category.php");
		?>
		</body>
	</html>