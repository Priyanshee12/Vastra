<?php session_start() ?> 
<html>
	<body>
		<?php 
		$id=$_GET['id'];
		$cn=mysqli_connect("localhost","root","","recreate") or die("check connection");
		$sql="insert into wishlist(productid,userid)values($id,'1')";
		echo $sql;
		$result=mysqli_query($cn,$sql);
		echo $result;
		$_SESSION['msg']="product Inserted into wishlist";
		//header("Location:search.php");
		?>