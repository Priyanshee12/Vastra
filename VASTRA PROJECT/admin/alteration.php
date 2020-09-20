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
                    <h1><i class="fa fa-tachometer"></i> ALTERATION LIST </h1><hr>

<?php
		$cn=mysqli_connect("localhost","root","","vastra") or die(mysql_error());
		$sql="select a.*,p.product_name from product_alteration a,product p where a.product_id=p.id ";
		$result=mysqli_query($cn,$sql);
		echo "<table border='1'>";
		
		echo "<tr>";
		//echo "<th>appointment_id</th>";
		echo "<th>date</th>";
		echo "<th>time</th>";
		echo "<th>description</th>";
		echo "<th>product name</th>";
		echo "<th>order_id</th>";

		echo "</tr>";
		
		
		while($row=mysqli_fetch_array($result))
			{	
				echo "<tr>";
				//echo "<td>${row['appointment_id']}</td>";
				echo "<td>${row['date']}</td>";
				echo "<td>${row['time']}</td>";
				echo "<td>${row['description']}</td>";
				echo "<td>${row['product_name']}</td>";
				echo "<td>${row['order_id']}</td>";
			//	echo "<td><a href='supplier1_edit.php?supplier_id={$row['supplier_id']}'>Edit</a>|<a href='supplier1_delete.php?supplier_id=${row['supplier_id']}'>delete</a></td>";
				echo "</tr>";
			}
			echo "<tr><td colspan='12'>".mysqli_num_rows($result)."records found</td></tr>";
			echo "</table>";
			mysqli_close($cn);
			?>
				
	