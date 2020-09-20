
	
		<?php
		$cn=mysqli_connect("localhost","root","","vastra") or die("check connection");
		$supplier_id=$_GET['supplier_id'];
		$sql="select *from supplier1 where supplier_id='$supplier_id'";
		$result=mysqli_query($cn,$sql);
		$rec=mysqli_fetch_array($result);
		mysqli_close($cn);

	?>
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
                    <h1><i class="fa fa-tachometer"></i> Supplier edit List </h1><hr>
		<form action="supplier_update.php" method="post">
		<input type="hidden" name="product_id" value="<?php echo $rec['supplier_id'];?>"/>
		<table border="1" cellpadding="5" cellspacing="0">
		<tr>
			<td>supplier id</td>
			<td><input type="text" requried value="<?php echo $rec['supplier_id'];?>"
			name="supplier_id"/></td>
		</tr>
		<tr>
			<td>supplier name</td>
			<td><input type="text" requried value="<?php echo $rec['supplier_name'];?>"
			name="supplier_name"/></td>
		</tr>
		<tr>
			<td>supplier address</td>
			<td><input type="text" requried value="<?php echo $rec['supplier_address'];?>"
			name="supplier_address"/></td>
		</tr>
		<tr>
			<td>email id</td>
			<td><input type="text" requried value="<?php echo $rec['email_id'];?>"
			name="email_id"/></td>
		</tr>
		<tr>
			<td>phone number</td>
			<td><input type="text" requried value="<?php echo $rec['phone_number'];?>"
			name="phone_number"/></td>
		</tr>
		<tr>
			<td>account number</td>
			<td><input type="text" requried value="<?php echo $rec['account_number'];?>"
			name="account_number"/></td>
		</tr>
		<tr>
			<td>bank number</td>
			<td><input type="text" requried value="<?php echo $rec['bank_number'];?>"
			name="bank_number"/></td>
		</tr>
		<tr>
			<td>ifsc code</td>
			<td><input type="text" requried value="<?php echo $rec['ifsc code'];?>"
			name="ifsc_code"/></td>
		</tr>
		<tr>
			<td>branch name</td>
			<td><input type="text" requried value="<?php echo $rec['branch_name'];?>"
			name="branch_name"/></td>
		</tr>
		<tr>
			<td>city id</td>
			<td><input type="text" requried value="<?php echo $rec['city_id'];?>"
			name="city_id"/></td>
		</tr>
		<tr>
			<td>boutique id</td>
			<td><input type="text" requried value="<?php echo $rec['boutique_id'];?>"
			name="boutique_id"/></td>
		</tr>
		<tr>
			<td><a href="supplier1.php">back</a></td>
			<td><input type="submit" value="save"/></td>
		</tr>
		</table>
</form>
</html>