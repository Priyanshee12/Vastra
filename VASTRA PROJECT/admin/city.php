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
                    <h1><i class="fa fa-tachometer"></i> CITY LIST </h1><hr>
<form action="city_insert.php" method="post">
<table>
	<tr>
		<td> City </city>
		<td> <input type="text" name="cityname" required></td>
	</tr>
	<tr>
		<td colspan ="2" align="center"> <input type="submit" value="submit" name="btnsubmit">
		</td>
	</tr>
</table>
</form>
	<?php
		$cn=mysqli_connect("localhost","root","","vastra") or die(mysql_error());
		$sql="select * from city";
		$result=mysqli_query($cn,$sql);
		echo "<table border='1'>";
		
		echo "<tr>";
		echo "<th>city id</th>";
		echo "<th>city name</th>";
		echo "<th> Add new </th>";
		echo "</tr>";
		
		
		while($row=mysqli_fetch_array($result))
			{	
				echo "<tr>";
				echo "<td>${row['city_id']}</td>";
				echo "<td>${row['city_name']}</td>";
				echo "<td><a href='city_edit.php?city_id={$row['city_id']}'>Edit</a>|<a href='city_delete.php?city_id=${row['city_id']}'>delete</a></td>";
				echo "</tr>";
			}
			echo "<tr><td colspan='5'>".mysqli_num_rows($result)."records found</td></tr>";
			echo "</table>";
			mysqli_close($cn);
			?>
				
		
</body>
</html>
 