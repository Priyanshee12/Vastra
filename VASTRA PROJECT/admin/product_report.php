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
<h1><i class="fa fa-tachometer"></i> PRODUCT REPORT</h1><hr>
	<?php
		$cn=mysqli_connect("localhost","root","","vastra") or die(mysql_error());
		$sql="select p.id,p.product_name,p.product_price,p.description,p.product_size,c.category_name,p.quantity,p.image from product p,category c where p.category_id=c.category_id";
		$result=mysqli_query($cn,$sql);
		echo "<table border='1'>";
		
		echo "<tr>";
		echo "<th>product_id</th>";
		echo "<th>product_name</th>";
		echo "<th>product_price</th>";
		echo "<th>description</th>";
		echo "<th>product_size</th>";
		echo "<th>category</th>";
		echo "<th>quantity</th>";
		echo "<th>image</th>";
		
		echo "</tr>";
		
		
		while($row=mysqli_fetch_array($result))
			{	
				echo "<tr>";
				echo "<td>${row['id']}</td>";
				echo "<td>${row['product_name']}</td>";
				echo "<td>${row['product_price']}</td>";
				echo "<td>${row['description']}</td>";
				echo "<td>${row['product_size']}</td>";
				echo "<td>${row['category_name']}</td>";
				echo "<td>${row['quantity']}</td>";
				echo "<td><img src=images/$row[image] width=60 height=60 /></td>";

								echo "</tr>";
			}
			echo "<tr><td colspan='9'>".mysqli_num_rows($result)."records found</td></tr>";
			echo "</table>";
			mysqli_close($cn);
			?>
	
		
</body>
</html>
 <? php  include_once ("inc/footer.php");
?>