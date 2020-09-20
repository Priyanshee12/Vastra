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
                    <h1><i class="fa fa-tachometer"></i> ORDER LIST</h1><hr>

<table>
	<!--<tr>
		<td> ORDER </td>
		<td> <input type="text" name="order id" required></td>
	</tr>
	
	<tr>
		<td colspan ="2" align="center"> <input type="submit" value="submit" name="btnsubmit">
		</td>
	</tr>-->
</table>
</form>
	<?php
		$cn=mysqli_connect("localhost","root","","vastra") or die(mysql_error());
		$sql="select o.order_id,o.order_date,d.quantity,u.user_fname,o.order_amount,d.product_id ,p.*from product p ,order1 o, order_detail d,user u where o.order_id=d.order_id and u.user_id=o.user_id  and p.id=d.product_id";
		$result=mysqli_query($cn,$sql);
		echo "<table border='1'>";
		
		echo "<tr>";
		echo "<th>order id</th>";
		echo "<th>order_date</th>";
		echo "<th>quantity</th>";
		echo "<th>user_fname</th>";
		echo "<th>order_amount</th>";
		echo "<th>product_name</th>";
		
		echo "</tr>";
		
		
		while($row=mysqli_fetch_array($result))
			{	
				echo "<tr>";
				echo "<td>${row['order_id']}</td>";
				echo "<td>${row['order_date']}</td>";
				
				echo "<td>${row['quantity']}</td>";
				echo "<td>${row['user_fname']}</td>";
				echo "<td>${row['order_amount']}</td>";
				echo "<td>${row['product_name']}</td>";
				
				echo "</tr>";
			}
			echo "<tr><td colspan='7'>".mysqli_num_rows($result)."records found</td></tr>";
			echo "</table>";
			mysqli_close($cn);
			?>
				
		
</body>
</html>
 