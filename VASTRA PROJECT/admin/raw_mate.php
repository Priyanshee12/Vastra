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
                    <h1><i class="fa fa-tachometer"></i> RAW MATERIAL LIST</h1><hr>
<form action="raw_insert.php" method="post">
<table>
	<tr>
		<td> Rawmaterial </td>
		<td> <input type="text" name="rawmaterial_name" required></td>
	</tr>
		<td> Rawmaterial Detail </td>
		<td> <input type="text" name="r_detail" required></td>
	</tr>
		<tr>
		<td> Quantity </td>
		<td> <input type="text" name="QTY" required></td>
	</tr>
	<tr>
		<td colspan ="2" align="center"> <input type="submit" value="submit" name="btnsubmit">
		</td>
	</tr>
</table>
</form>
	<?php
		$cn=mysqli_connect("localhost","root","","vastra") or die(mysql_error());
		$sql="select * from raw_material";
		$result=mysqli_query($cn,$sql);
		echo "<table border='1'>";
		
		echo "<tr>";
		echo "<th>rawmaterial_id</th>";
		echo "<th>rawmaterial_name</th>";
		echo "<th>r_detail</th>";
		echo "<th>Quantiy</th>";
		echo "<th> Add new </th>";
		echo "</tr>";
		
		
		while($row=mysqli_fetch_array($result))
			{	
				echo "<tr>";
				echo "<td>${row['rawmaterial_id']}</td>";
				echo "<td>${row['rawmaterial_name']}</td>";
				echo "<td>${row['r_detail']}</td>";
				echo "<td>${row['QTY']}</td>";	
				echo "<td><a href='raw_edit.php?rawmaterial_id={$row['rawmaterial_id']}'>Edit</a>|<a href='raw_delete.php?rawmaterial_id=${row['rawmaterial_id']}'>delete</a></td>";
				echo "</tr>";
			}
			echo "<tr><td colspan='5'>".mysqli_num_rows($result)."records found</td></tr>";
			echo "</table>";
			mysqli_close($cn);
			?>
</body>
</html>
 