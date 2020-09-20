<?php session_start() ?>
<html>
	<body>
			<?php 
			$cn=mysqli_connect("localhost","root","","vastra") or die ("check connection");
			$rawmaterial_name=$_POST['rawmaterial_name'];
			$r_detail=$_POST['r_detail'];
			$QTY1=$_POST['QTY'];
			
			$sql="insert into raw_material(rawmaterial_name,r_detail,QTY)values('$rawmaterial_name','$r_detail','$QTY1')";
			$result=mysqli_query($cn,$sql);
			//$_SESSION['msg']="city inserted";
			//header("Location:raw_insert.php");
		?>
		</body>
	</html>