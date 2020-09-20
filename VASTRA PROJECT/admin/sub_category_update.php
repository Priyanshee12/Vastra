<?php session_start() ?>
<html>
	<body>
			<?php 
			$cn=mysqli_connect("localhost","root","","vastra") or die ("check connection");
			
			$subcategory_id=$_POST['subcategory_id'];
			$subcategory_name=$_POST['subcategory_name'];
			$category_id=$_POST['category_id'];
			$sql="update sub_category set subcategory_name='$subcategory_name',category_id='$category_id' where subcategory_id=$subcategory_id";
			$result=mysqli_query($cn,$sql);
			//$_SESSION['msg']="sub_category inserted";
			//header("Location:sub_category.php");
		?>
		<script>
			alert("Subcategory updated");
		
			//$_SESSION['msg']="subcategory updated";
			location="sub_category.php";
		</script>
		</body>
	</html>