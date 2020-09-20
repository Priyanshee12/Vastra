<?php session_start() ?>
<html>
	<body>
			<?php 
			$cn=mysqli_connect("localhost","root","","vastra") or die ("check connection");
			$rawmaterial_id=$_POST['rawmaterial_id'];
			$rawmaterial_name=$_POST['rawmaterial_name'];
			$r_detail=$_POST['r_detail'];
			$QTY=$_POST['QTY'];
			
			$sql="update raw_material set rawmaterial_name='$rawmaterial_name',r_detail='$r_detail',QTY='$QTY'
			where rawmaterial_id=$rawmaterial_id";
			$result=mysqli_query($cn,$sql);
			//$_SESSION['msg']="rawmaterial inserted";
			//header("Location:raw_mate.php");
		?>
		<script>
			alert("Raw material updated");
		
			$_SESSION['msg']="Raw material updated";
			location="raw_mate.php";
		</script>
		</body>
	</html>