<?php session_start() ?>
<html>
	<body>
			<?php 
			$cn=mysqli_connect("localhost","root","","vastra") or die ("check connection");
			$category_name=$_POST['category_name'];
			$category_id=$_POST['category_id'];
			$sql="update category set category_name='$category_name' where category_id=$category_id";
			$result=mysqli_query($cn,$sql);
			$_SESSION['msg']="category inserted";
			header("Location:category.php");
		?>
		</body>
	</html>