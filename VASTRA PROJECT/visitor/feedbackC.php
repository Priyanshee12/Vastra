<?php session_start() ?>
<?php include_once("inc/header.php");
 
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
		<?php
			$cn=mysqli_connect("localhost","root","","vastra") or die(mysqli_error());
			$sql="select f.message,f.entry_date,u.user_fname from feedback f ,user u where u.user_id=f.user_id";
			$result=mysqli_query($cn,$sql);
		
			echo "<table border='1'>";
			echo "<tr>";
			//echo "<th>Feedback ID</th>";
			echo "<th>Feedback</th>";
			echo "<th>Feedback Date</th>";
			echo "<th>Name</th>";
			//echo "<th>Add new</th>";
			echo "</tr>";
		
			while($row=mysqli_fetch_array($result))
			{
				echo "<tr>";
				//echo "<td>${row['fid']}</td>";
				echo "<td>${row['message']}</td>";
				echo "<td>${row['entry_date']}</td>";
				echo "<td>${row['user_fname']}</td>";
				//echo "<td><a href='editfeedback.php?fid=${row['fid']}'>Edit</a>|<a href='deletefeedback.php?fid=${row['fid']}'>Delete</a></td>";
				//echo "</tr>";
			}
			echo "<tr><td colspan='5'>".mysqli_num_rows($result)." records fornd</td></tr>";
			echo "</table>";
			mysqli_close($cn);
		?>
	</body>
</html>
<?php include_once("inc/footer.php");

?>
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
		<?php
			$cn=mysqli_connect("localhost","root","","vastra") or die(mysqli_error());
			$sql="select f.message,f.entry_date,u.user_fname from feedback f ,user u where u.user_id=f.user_id";
			$result=mysqli_query($cn,$sql);
		
			echo "<table border='1'>";
			echo "<tr>";
			//echo "<th>Feedback ID</th>";
			echo "<th>Feedback</th>";
			echo "<th>Feedback Date</th>";
			echo "<th>Name</th>";
			//echo "<th>Add new</th>";
			echo "</tr>";
		
			while($row=mysqli_fetch_array($result))
			{
				echo "<tr>";
				//echo "<td>${row['fid']}</td>";
				echo "<td>${row['message']}</td>";
				echo "<td>${row['entry_date']}</td>";
				echo "<td>${row['user_fname']}</td>";
				//echo "<td><a href='editfeedback.php?fid=${row['fid']}'>Edit</a>|<a href='deletefeedback.php?fid=${row['fid']}'>Delete</a></td>";
				//echo "</tr>";
			}
			echo "<tr><td colspan='5'>".mysqli_num_rows($result)." records fornd</td></tr>";
			echo "</table>";
			mysqli_close($cn);
		?>
	</body>
</html>
<?php include_once("inc/footer.php");

?>
