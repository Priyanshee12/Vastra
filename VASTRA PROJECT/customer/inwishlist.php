<?php session_start() ?> 
<html>
	<body>
		<?php 
		$id=$_GET['id'];
		$user_id=$_SESSION['user_id'];
		$cn=mysqli_connect("localhost","root","","vastra") or die("check connection");
		$sql="insert into wishlist(product_id,user_id)values($id,$user_id) ";
		echo $sql;
		$result=mysqli_query($cn,$sql);
		echo $result;
		$_SESSION['msg']="product Inserted into wishlist";
		header("Location:search.php");
		?>
		