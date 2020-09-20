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
                    <h1><i class="fa fa-tachometer"></i> SUPPLIER LIST </h1><hr>
<form action="supplier1_insert.php" method="post">
<table>
	<tr>
		<td> Supplier Name </td>
		<td> <input type="text" name="supplier_name" required></td>
	</tr>
	<tr>
		<td> Supplier Address </td>
		<td> <input type="text" name="supplier_address" required></td>
	</tr>
	<tr>
		<td> Email Id </td>
		<td> <input type="text" name="email_id" required></td>
	</tr>
	<tr>
		<td> Phone Number </td>
		<td> <input type="text" name="phone_number" required></td>
	</tr>
	<tr>
		<td> Account Number</td>
		<td> <input type="text" name="account_number" required></td>
	</tr>
	<tr>
		<td> Bank Number </td>
		<td> <input type="text" name="bank_name" required></td>
	</tr>
	<tr>
		<td> Ifsc Code </td>
		<td> <input type="text" name="ifsc_code" required></td>
	</tr>
	<tr>
		<td> Branch Name </td>
		
		<td>
                            <select name="Branch Name">
                                <option value="      "<option>     </option>
								<option value="Naranpura"<option>Naranpura</option>
								<option value="Ambavadi"<option>Ambavadi</option>
								<option value="Satellite"<option>Satellite</option>
								<option value="Paldi"<option>Paldi</option>
								<option value="Vastrapur"<option>Vastrapur</option>
							     
								 
                                </select>
                                
                                
                        </td>
	</tr>
	<tr>
		<td> City Id </td>
		<td> <input type="text" name="city_id" required></td>
	</tr>
	<tr>
		<td> Boutique Id </td>
		<td> <input type="text" name="boutique_id" required></td>
	</tr>
	
	<tr>
		<td colspan ="2" align="center"> <input type="submit" value="submit" name="btnsubmit">
		</td>
	</tr>
</table>
</form>
	<?php
		$cn=mysqli_connect("localhost","root","","vastra") or die(mysql_error());
		$sql="select s.supplier_id,s.supplier_name,s.supplier_address,s.email_id,s.phone_number,s.account_number,s.bank_name,s.ifsc_code,s.branch_name,c.city_name,s.boutique_id  from supplier1 s,city c where c.city_id=s.city_id";
		$result=mysqli_query($cn,$sql);
		echo "<table border='1'>";
		
		echo "<tr>";
		echo "<th>supplier_id</th>";
		echo "<th>supplier_name</th>";
		echo "<th>supplier_address</th>";
		echo "<th>email_id</th>";
		echo "<th>phone_number</th>";
		echo "<th>account_number</th>";
		echo "<th>bank_name</th>";
		echo "<th>ifsc_code</th>";
		echo "<th>branch_name</th>";
		echo "<th>city_id</th>";
		echo "<th>boutique_id</th>";
		echo "<th> Add new </th>";
		echo "</tr>";
		
		
		while($row=mysqli_fetch_array($result))
			{	
				echo "<tr>";
				echo "<td>${row['supplier_id']}</td>";
				echo "<td>${row['supplier_name']}</td>";
				echo "<td>${row['supplier_address']}</td>";
				echo "<td>${row['email_id']}</td>";
				echo "<td>${row['phone_number']}</td>";
				echo "<td>${row['account_number']}</td>";
				echo "<td>${row['bank_name']}</td>";
				echo "<td>${row['ifsc_code']}</td>";
				echo "<td>${row['branch_name']}</td>";
				echo "<td>${row['city_name']}</td>";
				echo "<td>${row['boutique_id']}</td>";
				echo "<td><a href='supplier1_edit.php?supplier_id={$row['supplier_id']}'>Edit</a>|<a href='supplier1_delete.php?supplier_id=${row['supplier_id']}'>delete</a></td>";
				echo "</tr>";
			}
			echo "<tr><td colspan='12'>".mysqli_num_rows($result)."records found</td></tr>";
			echo "</table>";
			mysqli_close($cn);
			?>
				
		
</body>
</html>
 