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
                    <h1><i class="fa fa-tachometer"></i> FEEDBACK LIST</h1><hr>
<form action="feedback_insert.php" method="post">
<table>
	
	
	
</table>
</form>
	<?php
		$cn=mysqli_connect("localhost","root","","vastra") or die(mysql_error());
		$sql="select f.feedback_id,f.message,f.entry_date,u.user_fname from feedback f ,user u where u.user_id=f.user_id";
		$result=mysqli_query($cn,$sql);
		echo "<table border='1'>";
		
		echo "<tr>";
		echo "<th>feedback id</th>";
		echo "<th>message</th>";
		echo "<th>entry_date</th>";
		echo "<th>user_id</th>";
		echo "<th> Add new </th>";
		echo "</tr>";
		
		
		while($row=mysqli_fetch_array($result))
			{	
				echo "<tr>";
				echo "<td>${row['feedback_id']}</td>";
				echo "<td>${row['message']}</td>";
				echo "<td>${row['entry_date']}</td>";

				echo "<td>${row['user_fname']}</td>";
				
				echo "<td><a href='deletefeedback.php?feedback_id=${row['feedback_id']}'>delete</a></td>";
				echo "</tr>";
			}
			echo "<tr><td colspan='5'>".mysqli_num_rows($result)."records found</td></tr>";
			echo "</table>";
			mysqli_close($cn);
			?>
				
		
</body>
</html>
 