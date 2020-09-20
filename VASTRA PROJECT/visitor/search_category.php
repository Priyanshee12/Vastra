<html>
<?php session_start() ?>
<body>
<?php include_once("inc/header.php");
?>

<?php
		if(isset($_SESSION['msg'])){
		   echo $_SESSION['msg'];
		   unset($_SESSION['msg']);
		}
		?>	
		<h1><b>Search By Category</b></h1>

	<table border="1">
	<div>
	<form action="search_category.php" method="post">
		<tr>
			<td>Category</td>
			<td>
                            <select name="category_id">
                                <?php
                                $cn=mysqli_connect("localhost","root","","vastra") or die(mysqli_eroor());
                                $sql="select * from category";
                                $res=mysqli_query($cn,$sql);
                                while($arr=mysqli_fetch_array($res)){
                                    ?>
                                <option value="<?php echo $arr['category_id'] ?>"><?php echo $arr['category_name'] ?></option>
                                <?php
                                }
                                mysqli_close($cn);
                                ?>
                                </select>
                                
                                
                        </td>
		</tr>
        
		<tr>
		<td colspan="2" align="center"><input type="submit" value="submit" name="btnsubmit"></td>
		</tr>
		
	</form>
	
</table>
      <?php
       if(isset($_POST['category_id'])) {
	$cn=mysqli_connect("localhost","root","","vastra")or die(mysqli_error());	
	$sql="select p.*,t.* from product p,category t where p.category_id like '%$_POST[category_id]%' and p.category_id=t.category_id";
	//$sql="select p.*,t.* from product p,category t where p.category_id like '%$_POST[category_id]%' and p.category_id=t.category_id";
	$result=mysqli_query($cn,$sql);
	
	echo"<table border='1' cellpadding='10' cellspacing='0' bgcolor='White'>";
	echo"<tr>";
		echo "<th>Product Name</th>";
		echo "<th>Product Price</th>";
        echo "<th>Description</th>";
		echo "<th>Product Size</th>";		
		echo "<th>Quantity</th>";
		echo "<th>Category</th>";
		echo "<th>Image</th>";
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
		echo"<td><a href='login.php?id=${row['id']}'>AddtoCart</a>|
		<a href='login.php?id=${row['id']}'>wishlist</a></td>" ;
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