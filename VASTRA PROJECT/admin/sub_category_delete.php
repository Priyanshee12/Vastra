<?php session_start() ?>
<html>
	<body>
			<?php 
			$cn=mysqli_connect("localhost","root","","vastra") or die ("check connection");
			$subcategory_id=$_GET['subcategory_id'];
			echo $subcategory_id;
			$sql="delete from sub_category where subcategory_id='$subcategory_id'";
			$result=mysqli_query($cn,$sql);
			//$_SESSION['msg']="sub_category deleted";
			//header("Location:sub_category.php");
		?>
		<script>
			alert("Subcategory deleted");
		
			//$_SESSION['msg']="subcategory deleted";
			location="sub_category.php";
		</script>
		</body>
	</html>