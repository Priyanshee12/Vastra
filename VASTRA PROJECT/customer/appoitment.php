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
                    <h1> CUSTOMIZE APPOINTMENT </h1><br></br>
<form action="insert_appoitment.php" method="post">
<table border=1>
			


			
		<tr>
		<td> Date </td>
		<td> <input type="date" name="date" required></td>
	</tr>
	<tr>
		<td> Time</td>
		<td> <input type="time" name="time" required></td>
	</tr>
	<!--<tr>
		<td> User Name </td>
		<td> <input type="text" name="user_name" required></td>
	</tr>
	-->
	<tr>
		<td> Description</td>
		<td> <input type="textarea" name="description" required></td>
	</tr>
	<!--<tr>
		<td> User Id </td>
		<td> <input type="text" name="user_id" required></td>
	</tr>-->
	
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