<?php session_start() ?>

              
                <div class="col-md-9">
                    <h1><i class="fa fa-tachometer"></i> PRODUCT ALTERATION LIST</h1><hr>
<form action="Product_alteration.php" method="post">
<table>
	<tr>
		<td> Date </td>
		<td> <input type="text" name="date" required></td>
	</tr>
	<tr>
		<td> Time</td>
		<td> <input type="text" name="time" required></td>
	</tr>
	<tr>
		<td> Description</td>
		<td> <input type="textarea" name="description" required></td>
	</tr>
	<tr>
		<td> Product Id </td>
		<td> <input type="text" name="product_id" required></td>
	</tr>
	<tr>
		<td> Order Id </td>
		<td> <input type="text" name="order_id" required></td>
	</tr>
	
	<tr>
		<td colspan ="2" align="center"> <input type="submit" value="submit" name="btnsubmit">
		</td>
	</tr>
</table>
</form>
			
</body>
</html>
 <?php include_once("inc/footer.php");


?>