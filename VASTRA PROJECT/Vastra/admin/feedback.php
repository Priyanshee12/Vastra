<?php session_start() ?>
<?php 
require_once('inc/top.php');
?>
  </head>

  <body>
    <div id="wrapper">
<?php 
require_once('inc/header.php');
?>

        <div class="container-fluid body-section">
            <div class="row">
<?php 
require_once('inc/sidebar.php');
?>
              
                <div class="col-md-9">
                    <h1><i class="fa fa-tachometer"></i> Feedback List </h1><hr>
<form action="feedback_insert.php" method="post">
<table>
	<tr>
		<td> feedback </td>
		<td> <input type="text" name="feedback id" required></td>
	</tr>
	
	<tr>
		<td colspan ="2" align="center"> <input type="submit" value="submit" name="btnsubmit">
		</td>
	</tr>
</table>
</form>
	<?php
		$cn=mysqli_connect("localhost","root","","vastra") or die(mysql_error());
		$sql="select * from feedback";
		$result=mysqli_query($cn,$sql);
		echo "<table border='1'>";
		
		echo "<tr>";
		echo "<th>feedback id</th>";
		echo "<th>message</th>";
		echo "<th>entry_date</th>";
		echo "<th>feedback_qty</th>";
		echo "<th>user_id</th>";
		echo "<th> Add new </th>";
		echo "</tr>";
		
		
		while($row=mysqli_fetch_array($result))
			{	
				echo "<tr>";
				echo "<td>${row['feedback_id']}</td>";
				echo "<td>${row['message']}</td>";
				echo "<td>${row['entry_date']}</td>";
				echo "<td>${row['feedback_qty']}</td>";
				echo "<td>${row['user_id']}</td>";
				
				echo "<td><a href='feedback_edit.php?city_id={$row['feedback_id']}'>Edit</a>|<a href='feedback_delete.php?feedback_id=${row['feedback_id']}'>delete</a></td>";
				echo "</tr>";
			}
			echo "<tr><td colspan='5'>".mysqli_num_rows($result)."records found</td></tr>";
			echo "</table>";
			mysqli_close($cn);
			?>
				
		
</body>
</html>
 