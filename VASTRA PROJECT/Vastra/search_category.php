<?php session_start() ?>
<?php
		if(isset($_SESSION['msg'])){
		   echo $_SESSION['msg'];
		   unset($_SESSION['msg']);
		}
		?>
<html>
	<head>
		<title>//</title>
	</head>
	<body>
	<table border="1">
	<form action="search_category.php" method="post">
		<tr>
			<td>search by category_name</td>
			<td><input type="text" name="category_name"></td>
                </tr>
                
		<tr>
		<td colspan="2" align="center"><input type="submit" value="submit" name="btnsubmit"></td>
		</tr>
	</form>
	</table>
            <?php
            if(isset ($_POST['category_name'])) {
	$cn=mysqli_connect("localhost","root","","vastra")or die(mysqli_error());
	$sql="select product_name,product_price,description,product_size,quantity from product where category_name like '%$_POST[category_name]%'";
	$result=mysqli_query($cn,$sql);

	echo"<table border='1' cellpadding='10' cellspacing='0' bgcolor='pink'>";
	echo"<tr>";
	echo "<th>product_name</th>";
        echo "<th>product_price</th>";
        echo "<th>description</th>"; 
		echo "<th>product_size</th>";
		echo "<th>quantity</th>";
		echo "<th>-</th>";
    echo "</tr>";
	while($row=mysqli_fetch_array($result)){
		echo "<tr>";
		echo "<td>${row['product_name']}</td>";
		echo "<td>${row['product_price']}</td>";
        echo "<td>${row['description']}</td>";          
		echo "<td>${row['product_size']}</td>";
		echo "<td>${row['quantity']}</td>";
               //echo "<td><img src=images/$row[image] width=60 height=60 /></td>";	
		echo"<td><a href='registration.php'>AddtoCart</a></td>";
		echo "</tr>";
	}
	echo"<tr><td colspan='9'>".mysqli_num_rows($result)."records found</td></tr>";
	echo "</table>";
	mysqli_close($cn);
            }
	?>
</div>
            </div>
        </div>

	
</body>
</html>
