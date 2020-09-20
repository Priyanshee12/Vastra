<?php session_start() ?>
<html>
	<body>
			<?php 
			$cn=mysqli_connect("localhost","root","","vastra") or die ("check connection");
			$date=$_POST['date'];
			$time=$_POST['time'];
			$user_name=$_SESSION['user_fname'];
			$description=$_POST['description'];
			$user_id=$_POST['user_id'];
			
			$sql="insert into appointment(date,time,user_name,description)values ('$date','$time','$user_name','$description')";
			echo $sql;
			$result=mysqli_query($cn,$sql);
			echo $result;
			$_SESSION['msg']="Appoitment is inserted";
			header("Location:appoitment.php");
		?>
		</body>
	</html>