
	
		<?php
		$cn=mysqli_connect("localhost","root","","vastra") or die("check connection");
		$rawmaterial_id=$_GET['rawmaterial_id'];
		$sql="select * from raw_material where rawmaterial_id='$rawmaterial_id'";
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
                    <h1><i class="fa fa-tachometer"></i> Rawmaterial edit List </h1><hr>
		<form action="raw_update.php" method="post">
		<input type="hidden" name="rawmaterial_id" value="<?php echo $rec['rawmaterial_id'];?>"/>
		<table border="1" cellpadding="5" cellspacing="0">
		<tr>
			<td>rawmaterial name</td>
			<td><input type="text" requried value="<?php echo $rec['rawmaterial_name'];?>"
			name="rawmaterial_name"/></td>
		</tr>
		<tr>
			<td>rawmaterial detail</td>
			<td><input type="text" requried value="<?php echo $rec['r_detail'];?>"
			name="r_detail"/></td>
			
		<tr>
			<td>Quantity</td>
			<td><input type="text" requried value="<?php echo $rec['QTY'];?>"
			name="QTY"/></td>
		</tr>
		</tr>
		<tr>
			<td><a href="raw_mate.php">back</a></td>
			<td><input type="submit" value="save"/></td>
		</tr>
		</table>
</form>
</html>