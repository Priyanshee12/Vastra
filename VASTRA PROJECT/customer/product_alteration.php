<?php session_start() ?>
<?php include_once("inc/header.php");

?>
<html>
  </head>

  <body>
    <div id="wrapper">

        <div class="container-fluid body-section">
            <div class="row">
              
                <div class="col-md-9">
                    <h1>  ALTERATION  APPOINTMENT</h1><br><br>
<form action="insert_alteration.php" method="post">
<table border=1>
		<tr>
		<td> Date </td>
		<td> <input type="date" name="date1" required></td>
	</tr>
	<tr>
		<td> Time</td>
		<td> <input type="time" name="time1" required></td>
	</tr>
	<tr>
		<td> Description</td>
		<td> <input type="textarea" name="description" required></td>
	</tr>
	<tr>
	<td>Product Name</td>
	<td>
		<select name="id">
                                <?php
                                $cn=mysqli_connect("localhost","root","","vastra") or die(mysqli_eroor());
                                $sql="select * from product";
                                $res=mysqli_query($cn,$sql);
                                while($arr=mysqli_fetch_array($res)){
                                    ?>
                                <option value="<?php echo $arr['id'] ?>"><?php echo $arr['product_name'] ?></option>
                                <?php
                                }
                                mysqli_close($cn);
                                ?>
                                </select>
         </td>                   
	</tr>

	<tr>
		<td> Order Id </td>
		<td> <input type="text" name="order_id" required></td>
	</tr>
	
	<tr>
		<td colspan ="2" align="center"> <input type="submit" value="submit" name="btnsubmit">
		</td>
	</tr>
</table>
</form>
		</div>
		</div>
	</div>
	<br />
	<?php include_once("inc/footer.php");

?>