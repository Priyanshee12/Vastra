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
<h1><i class="fa fa-tachometer"></i> USER REPORT</h1><hr>
	<?php
		$cn=mysqli_connect("localhost","root","","vastra") or die(mysql_error());
		$sql="select u.user_id,u.user_fname,u.user_lname,u.email_id,u.contact_number,u.address,c.city_name,u.gender from user u,city c where u.city_id=c.city_id";
		$result=mysqli_query($cn,$sql);
		echo "<table border='1'>";
		
		echo "<tr>";
		echo "<th>user_id</th>";
		echo "<th>user_fname</th>";
		echo "<th>user_lname</th>";
		echo "<th>email_id</th>";
		echo "<th>contact_number</th>";
		echo "<th>address</th>";
		echo "<th>city_name</th>";

		echo "</tr>";
		
		
		while($row=mysqli_fetch_array($result))
			{	
				echo "<tr>";
				echo "<td>${row['user_id']}</td>";
				echo "<td>${row['user_fname']}</td>";
				echo "<td>${row['user_lname']}</td>";
				echo "<td>${row['email_id']}</td>";
				echo "<td>${row['contact_number']}</td>";
				echo "<td>${row['address']}</td>";
				echo "<td>${row['city_name']}</td>";

				
						echo "</tr>";
			}
			echo "<tr><td colspan='9'>".mysqli_num_rows($result)."records found</td></tr>";
			echo "</table>";
			mysqli_close($cn);
			?>
	
		
</body>
</html>
 <? php  include_once ("inc/footer.php");
?>