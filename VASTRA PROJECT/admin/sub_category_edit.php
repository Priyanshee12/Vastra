
		<?php
		$cn=mysqli_connect("localhost","root","","vastra") or die("check connection");
		$subcategory_id=$_GET['subcategory_id'];
		$sql="select *from sub_category where subcategory_id='$subcategory_id'";
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
                    <h1><i class="fa fa-tachometer"></i> subcategory edit List </h1><hr>
		<form action="sub_category_update.php" method="post">
		<input type="hidden" name="subcategory_id" value="<?php echo $rec['subcategory_id'];?>"/>
		<table border="1" cellpadding="5" cellspacing="0">
		<tr>
			<td>subcategory name</td>
			<td><input type="text" requried value="<?php echo $rec['subcategory_name'];?>"
			name="subcategory_name"/></td>
		</tr>
		<tr>
			<td>category id</td>
			<td><input type="text" requried value="<?php echo $rec['category_id'];?>"
			name="category_id"/></td>
		</tr>
		<tr>
			<td><a href="sub_category.php">back</a></td>
			<td><input type="submit" value="save"/></td>
		</tr>
		</table>
</form>
</html>