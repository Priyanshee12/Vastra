<?php session_start() ?>
<body>
<?php
		if(isset($_SESSION['msg'])){
		   echo $_SESSION['msg'];
		   unset($_SESSION['msg']);
		}
		?>

	<table border="1">
	<form action="search_category.php" method="post">
		<tr>
			<td>search by name</td>
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
	$sql="select p.product_name,p.product_price,p.description,p.product_size,p.quantity,p.image,c.category_name from product p, category c where c.category_id=p.category_id and c.category_name like '%$_POST[name]%'";
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
		echo"<td><a href='registration.php'>AddtoCart</a></td>";
		echo "</tr>";
	}
	//echo"<tr><td colspan='9'>".mysqli_num_rows($result)."records found</td></tr>";
	echo "</table>";
	mysqli_close($cn);
            }
	?>
</div>
            </div>
        </div>	
</body>
</html>