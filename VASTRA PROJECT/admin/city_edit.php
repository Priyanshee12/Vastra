
	
		<?php
		$cn=mysqli_connect("localhost","root","","vastra") or die("check connection");
		$city_id=$_GET['city_id'];
		$sql="select *from city where city_id='$city_id'";
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
                    <h1><i class="fa fa-tachometer"></i> City edit List </h1><hr>
		<form action="city_update.php" method="post">
		<input type="hidden" name="city_id" value="<?php echo $rec['city_id'];?>"/>
		<table border="1" cellpadding="5" cellspacing="0">
		<tr>
			<td>city name</td>
			<td><input type="text" requried value="<?php echo $rec['city_name'];?>"
			name="city_name"/></td>
		</tr>
		<tr>
			<td><a href="city.php">back</a></td>
			<td><input type="submit" value="save"/></td>
		</tr>
		</table>
</form>
</html>