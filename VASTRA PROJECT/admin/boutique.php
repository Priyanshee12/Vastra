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
                    <h1><i class="fa fa-tachometer"></i> BOUTIQUE LIST </h1><hr>
<form action="boutique_insert.php" method="post">
<table>
	<!--<tr>
		<td> Boutique id</td>
		<td> <input type="text" name="boutique id" required></td>
		
	</tr>-->
	<tr>
	<td>Boutique Name</td>
			<td> <input type="text" name="boutique name" required></td>
	</tr>

	
	
	<tr>
	<td>Address</td>
	<td> <input type="text" name="address" required></td>
	</tr>
	<tr>
	<td> Contact Number</td>
	<td> <input type="text" name="contact number" required></td>
	</tr>
	<tr>
	<td>Email id</td>
	<td> <input type="text" name="email_id" required></td>
	</tr>
	<tr>
	<td>City Name</td>
	<td>
		<select name="city_id">
                                <?php
                                $cn=mysqli_connect("localhost","root","","vastra") or die(mysqli_eroor());
                                $sql="select * from city";
                                $res=mysqli_query($cn,$sql);
                                while($arr=mysqli_fetch_array($res)){
                                    ?>
                                <option value="<?php echo $arr['city_id'] ?>"><?php echo $arr['city_name'] ?></option>
                                <?php
                                }
                                mysqli_close($cn);
                                ?>
                                </select>
         </td>                   
	</tr>



	
	<tr>
		<td colspan ="2" align="center"> <input type="submit" value="submit" name="btnsubmit">
		</td>
	</tr>
</table>
</form>
	<?php
		$cn=mysqli_connect("localhost","root","","vastra") or die(mysql_error());
		$sql="select b.boutique_id,b.boutique_name,b.address,b.contact_number,b.email_id,c.city_name from boutique b,city c where c.city_id=b.city_id";
		$result=mysqli_query($cn,$sql);
		echo "<table border='1'>";
		
		echo "<tr>";
		echo "<th>boutique id</th>";
		echo "<th>boutique name</th>";
		echo "<th>address</th>";
		echo "<th>contact_number</th>";
		echo "<th>email_id</th>";
		echo "<th>city</th>";
		echo "<th>Add new </th>";
		echo "</tr>";
		
		
		while($row=mysqli_fetch_array($result))
			{	
				echo "<tr>";
				echo "<td>${row['boutique_id']}</td>";
				echo "<td>${row['boutique_name']}</td>";
				echo "<td>${row['address']}</td>";
				echo "<td>${row['contact_number']}</td>";
				echo "<td>${row['email_id']}</td>";
				echo "<td>${row['city_name']}</td>";
				
				echo "<td><a href='boutique_edit.php?boutique_id={$row['boutique_id']}'>Edit</a>|<a href='boutique_deleted.php?boutique_id={$row['boutique_id']}'>delete</a></td>";
				echo "</tr>";
			}
			echo "<tr><td colspan='8'>".mysqli_num_rows($result)."records found</td></tr>";
			echo "</table>";
			mysqli_close($cn);
			?>
				
		
</body>
</html>
 
 
 