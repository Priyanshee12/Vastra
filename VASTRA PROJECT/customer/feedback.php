<?php session_start() ?>
<?php include_once("inc/header.php");
?>         
                <div class="col-md-9">
                    <h1> FEEDBACK LIST</h1><hr>
<form action="feedback_insert.php" method="post">
<table>
<tr>
<td>feedback description</td>
<td><textarea name="fdesc" rows="5" cols="20" required></textarea></td>
<tr>
<td colspan="5" align="center"><input type="submit" value="submit" name="submit"></td>
</tr>	
	
	
</table>
</form>
	<?php
		$cn=mysqli_connect("localhost","root","","vastra") or die(mysql_error());
		$sql="select f.*,u.userid,u. where f.user_id = u.user_id";
		$result=mysqli_query($cn,$sql);
		echo "<table border='1'>";
		
		echo "<tr>";
		echo "<th>feedback id</th>";
		echo "<th>message</th>";
		echo "<th>entry_date</th>";
		echo "<th>user_id</th>";
		//echo "<th> Add new </th>";
		echo "</tr>";
		
		
		while($row=mysqli_fetch_array($result))
			{	
				echo "<tr>";
				echo "<td>${row['feedback_id']}</td>";
				echo "<td>${row['message']}</td>";
				echo "<td>${row['entry_date']}</td>";

				echo "<td>${row['user_id']}</td>";
				
				echo "<td><a href='feedback_delete.php?feedback_id=${row['feedback_id']}'>delete</a></td>";
				echo "</tr>";
			}
			echo "<tr><td colspan='5'>".mysqli_num_rows($result)."records found</td></tr>";
			echo "</table>";
			mysqli_close($cn);
			?>
				
		
</body>
</html>
 <?php include_once("inc/footer.php");
 ?>