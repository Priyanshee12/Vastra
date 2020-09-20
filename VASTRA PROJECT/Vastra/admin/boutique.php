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
                    <h1><i class="fa fa-tachometer"></i> Boutique List </h1><hr>
<form action="boutique_insert.php" method="post">
<table>
	<tr>
		<td> boutique id</td>
		<td> <input type="text" name="boutique id" required></td>
		
	</tr>
	<tr>
	<td>boutique name</td>
			<td> <input type="text" name="boutique name" required></td>
	</tr>

	
	<tr>
	<tr>
	<td>boutique name</td>
			<td> <input type="text" name="boutique name" required></td>
	</tr>

	
	<tr>
		<td colspan ="2" align="center"> <input type="submit" value="submit" name="btnsubmit">
		</td>
	</tr>
</table>
</form>
	<?php
		$cn=mysqli_connect("localhost","root","","vastra") or die(mysql_error());
		$sql="select * from boutique";
		$result=mysqli_query($cn,$sql);
		echo "<table border='1'>";
		
		echo "<tr>";
		echo "<th>boutique id</th>";
		echo "<th>boutique name</th>";
		echo "<th>boutique adress</th>";
		echo "<th>boutique contact_number</th>";
		echo "<th>boutique Emailid</th>";
		echo "<th>city id</th>";
		echo "<th> Add new </th>";
		echo "</tr>";
		
		
		while($row=mysqli_fetch_array($result))
			{	
				echo "<tr>";
				echo "<td>${row['boutique_id']}</td>";
				echo "<td>${row['boutique_name']}</td>";
				echo "<td><a href='boutique_edit.php?boutique_id={$row['boutique_id']}'>Edit</a>|<a href='boutique_delete.php?city_id=${row['boutique_id']}'>delete</a></td>";
				echo "</tr>";
			}
			echo "<tr><td colspan='5'>".mysqli_num_rows($result)."records found</td></tr>";
			echo "</table>";
			mysqli_close($cn);
			?>
				
		
</body>
</html>
 