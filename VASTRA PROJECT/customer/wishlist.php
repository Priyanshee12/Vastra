<?php session_start()?>
<?php include_once("inc/header.php");

?>
<?php
			$userid=$_SESSION['user_id'];
			$cn=mysqli_connect("localhost","root","","vastra") or die(mysqli_error());
			$sql="select p.id,u.user_fname,p.product_name,p.image from product p,user u,wishlist w where w.user_id=u.user_id and p.id=w.product_id and u.user_id=27";
			$result=mysqli_query($cn,$sql);	
			echo $_SESSION['user_fname'];
			echo "<h1>Wishlist</h1><br></br>";
			echo "<table border='1'>";
			echo "<tr>";
			echo "<th>User name</th>";
			echo "<th>Product name</th>";
			echo "<th>image</th>";
			echo "<th>     </th>";
			
			echo "</tr>";
			
			while($row=mysqli_fetch_array($result))
			{
				echo "<tr>";
				echo "<td>${row['user_fname']}</td>";
				echo "<td>${row['product_name']}</td>";
				
				echo "<td><img src=images/$row[image] width=150 height=150 /></td>";
				echo"<td><a href='cart.php?id=${row['id']}'>AddtoCart</a>  </td>";

				echo "</tr>";
			}
			echo "<tr><td colspan='10'>".mysqli_num_rows($result)." record(s) found</td></tr>";
			echo "</table>";
			mysqli_close($cn);
		?>
	</body>
	<?php include_once("inc/footer.php");

?>