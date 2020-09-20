<?php session_start() ?>
<?php include_once("inc/header.php");
 echo "Welcome ";
 echo $_SESSION['user_fname'];
?>


<html>
	<body>
		<form action="project4.php" method="POST">
		<h1>FEEDBACK</H1>
			<table>
				<tr>
					<table border="1">
					<td>Feedback Description</td>
					<td><textarea name="fdesc" rows="5" cols="20" required></textarea></td>
				</tr>
				<tr>
					<td colspan="5"  align="center"><input type="submit" value="submit "name="submit" ></td>
				</tr>
			</table>
		</form>
		
	</body>
</html>
<?php include_once("inc/footer.php");

?>
