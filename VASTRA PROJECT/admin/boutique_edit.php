
	
		<?php
		$cn=mysqli_connect("localhost","root","","vastra") or die("check connection");
		$boutique_id=$_GET['boutique_id'];
		$sql="select *from boutique where boutique_id='$boutique_id'";
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
                    <h1><i class="fa fa-tachometer"></i> Boutique edit List </h1><hr>
		<form action="boutique_update.php" method="post">
		<input type="hidden" name="boutique_id" value="<?php echo $rec['boutique_id'];?>"/>
		<table border="1" cellpadding="5" cellspacing="0">
		<tr>
			<td>boutique name</td>
			<td><input type="text" requried value="<?php echo $rec['boutique_name'];?>"
			name="boutique_name"/></td>
		</tr>
		<tr>
			<td>boutique address</td>
			<td><input type="text" requried value="<?php echo $rec['address'];?>"
			name="address"/></td>
		</tr>
		<tr>
			<td> Contact Number</td>
			<td><input type="text" requried value="<?php echo $rec['contact_number'];?>"
			name="contact_number"/></td>
		</tr>
		<tr>
			<td> Email Id</td>
			<td><input type="text" requried value="<?php echo $rec['email_id'];?>"
			name="email_id"/></td>
		</tr>
		<tr>
			<td> City Id</td>
			<td><input type="text" requried value="<?php echo $rec['city_id'];?>"
			name="city_id"/></td>
		</tr>
		
		
		<tr>
			<td><a href="boutique.php">back</a></td>
			<td><input type="submit" value="save"/></td>
		</tr>
		</table>
</form>
</html>