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
                    <h1><i class="fa fa-tachometer"></i> Brand List </h1><hr>
		<table border="1">
		<form action="ins_brand.php" method="post">
			<tr>
				<td>Brand</td>
				<td><input type="text" name="brand_name" required></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit"value="submit"
				name="btnsubmit"></td>
			</tr>
	
		</form>
		</table>
	<?php 
	if(isset($_SESSION['msg'])){
	echo $_SESSION['msg'];
	unset ($_SESSION['msg']);
	}
	?>
	<?php 
		function show($arr)
		{
		echo "<pre>";
		print_r($arr);
		echo "</pre>";
		}

	$cn=mysqli_connect("localhost","root","","flikers") or die(mysqli_error());
	$sql="select * from brand";
	$result=mysqli_query($cn,$sql);
	
	echo "<table border='1' cellpadding='10' cellspacing='0' bgcolor='pink'>";
	echo "<tr>";
	echo "<th>brand id</th>";
	echo "<th>name</th>";
	
	echo "<th>add new</th>";
	echo "</tr>";
	
	while($row=mysqli_fetch_array($result))
	{
	echo "<tr>";
	echo "<td>${row['brand_id']}</td>";
	echo "<td>${row['brand_name']}</td>";
	echo"<td><a href='editbrand.php?brand_id={$row['brand_id']}'>edit</a>|<a href='deletebrand.php?brand_id=${row['brand_id']}'>delete</a></td>";
	echo "</tr>";
	}
echo "<tr><td colspan='5'>".mysqli_num_rows($result)." records found</td></tr>";
echo "</table>";
mysqli_close($cn);
?>
 </div>
            </div>
        </div>
<?php 
require_once('inc/footer.php');
?>
	
</body>
</html>	