<?php session_start() ?> 
<html>
	<body>
		<?php 
		$cn=mysqli_connect("localhost","root","","vastra") or die("check connection");

				
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
				
			$item_id=$values["item_id"];
			$item_quantity=$values["item_quantity"];
			$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<table>
					<tr>
						<td colspan="4" align="right">Total</td>
						<td align="right">Rs <?php echo number_format($total, 2); ?></td>
						
					</tr>
					<tr>
					<td colspan=5 align=right><a href=insorder.php align=right><h3>Payment</h3></a></td>
					</tr>
					<?php
					}
				
		
		$sql="insert into order1(user_id,order_amount,order_date)values('1',$total,now())";
		echo $sql;
		$result=mysqli_query($cn,$sql);
		echo $result;


		$sql1="select max(order_id) from order1";
		echo $sql1;
		$result1=mysqli_query($cn,$sql1);
		$row= mysqli_fetch_row($result1);
		echo "$row[0]";
		$order_id=$row[0];
		
	
if(!empty($_SESSION["shopping_cart"]))
				{
					$total = 0;
					foreach($_SESSION["shopping_cart"] as $keys => $values)
				{
				
			$item_id=$values["item_id"];
			$item_quantity=$values["item_quantity"];

		$sql2="insert into order_detail(order_id,product_id,quantity)values($order_id,$item_id,$item_quantity)";
		echo "$sql2";
		$result2=mysqli_query($cn,$sql2);
}}
	header("Location:payment.php");
	?>
	</body>
</html>