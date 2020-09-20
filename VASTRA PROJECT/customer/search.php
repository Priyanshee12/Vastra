
<?php session_start() ?>
<?php include_once("inc/header.php");
 echo "Welcome ";
 echo $_SESSION['user_fname'];
?>
<body>
<?php
		if(isset($_SESSION['msg'])){
		   echo $_SESSION['msg'];
		   unset($_SESSION['msg']);
		}
		
		?>
	         
<h1><b>Search By Name </b></h1>


	<table border="2">
	<form action="search.php" method="post">
		<tr>
			
		<td> Search Here</td>
		<td><input type="text" name="name"></td>
	
					
        </tr>        
		<tr>
		<td colspan="2" align="center"><input type="submit" value="submit" name="btnsubmit"></td>
		</tr>
	</form>
</table>
      <?php
       if(isset($_POST['name'])) {
	$cn=mysqli_connect("localhost","root","","vastra")or die(mysqli_error());	
	$sql="select p.id, p.product_name,p.product_price,p.description,p.product_size,p.quantity,p.image,c.category_name from product p, category c where c.category_id=p.category_id and product_name like '%$_POST[name]%'";
	$result=mysqli_query($cn,$sql);
	echo"<table border='1' cellpadding='10' cellspacing='0' bgcolor='pink'>";
	echo"<tr>";
		echo "<th>product_name</th>";
		echo "<th>product_price</th>";
        echo "<th>description</th>";
		echo "<th>product_size</th>";		
		echo "<th>quantity</th>";
		echo "<th>category</th>";
		echo "<th>image</th>";
		echo "<th>-</th>";
    echo "</tr>";
	while($row=mysqli_fetch_array($result)){
		echo "<tr>";
		echo "<td>${row['product_name']}</td>";
		echo "<td>${row['product_price']}</td>";
        echo "<td>${row['description']}</td>";          
        echo "<td>${row['product_size']}</td>";
		echo "<td>${row['quantity']}</td>";
		echo "<td>${row['category_name']}</td>";  
        echo "<td><img src=images/$row[image] width=60 height=60 /></td>";	
		echo"<td><a href='cart.php?id=${row['id']}'>AddtoCart</a>|
		<a href='inwishlist.php?id=${row['id']}'>wishlist</a></td>" ;
		echo "</tr>";
	}
	//echo"<tr><td colspan='9'>".mysqli_num_rows($result)."records found</td></tr>";
	echo "</table>";
	mysqli_close($cn);
            }
	?>

</body>
</html>
<?php include_once("inc/footer.php");

?>