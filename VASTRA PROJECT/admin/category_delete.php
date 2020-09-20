<?php session_start() ?>
<html>
	<body>
			<?php 
			$cn=mysqli_connect("localhost","root","","vastra") or die ("check connection");
			$category_id=$_GET['category_id'];
			echo $category_id;
			$sql="delete from category where category_id='$category_id'";
			$result=mysqli_query($cn,$sql);
			//$_SESSION['msg']="category deleted";
			//header("Location:category.php");
		?>
		<script>
			alert("category deleted");
		
			//$_SESSION['msg']="category deleted";
			location="category.php";
		</script>
		</body>
	</html>