<?php session_start() ?>

	
		<?php
		$cn=mysqli_connect("localhost","root","","vastra") or die("check connection");
		$id=$_GET['id'];
		$sql="select * from product where id='$id'";
		$result=mysqli_query($cn,$sql);
		$rec=mysqli_fetch_array($result);
		mysqli_close($cn);

	?>
	
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
                    <h1><i class="fa fa-tachometer"></i> Product edit List </h1><hr>
		
		<form action="product_update.php" method="post">
		<input type="hidden" name="id" value="<?php echo $rec['id'];?>"/>
		<table border="1" cellpadding="5" cellspacing="0">
		<tr>
			<td>product name</td>
			<td><input type="text" requried value="<?php echo $rec['product_name'];?>"
			name="product_name"/></td>
		</tr>
		<tr>
			<td>product price</td>
			<td><input type="text" requried value="<?php echo $rec['product_price'];?>"
			name="product_price"/></td>
			
		<tr>
			<td>description</td>
			<td><input type="text" requried value="<?php echo $rec['description'];?>"
			name="description"/></td>
		</tr>
		</tr>
		<tr>
			<td>product size</td>
			<td><input type="text" requried value="<?php echo $rec['product_size'];?>"
			name="product_size"/></td>
		</tr>
		<tr>
			<td>category id</td>
			<td><input type="text" requried value="<?php echo $rec['category_id'];?>"
			name="category_id"/></td>
		</tr>
		<tr>
			<td>quantity</td>
			<td><input type="text" requried value="<?php echo $rec['quantity'];?>"
			name="quantity"/></td>
		</tr>
		
		<tr>
			<td><a href="product.php">back</a></td>
			<td><input type="submit" value="save"/></td>
		</tr>
		</table>
</form>
</html>