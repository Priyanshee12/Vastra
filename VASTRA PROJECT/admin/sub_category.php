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
                    <h1><i class="fa fa-tachometer"></i> SUBCATEGORY LIST </h1><hr>
<form action="sub_category_insert.php" method="post">
<table>
	<tr>
		<td> Subcategory Name </td>
		<td> <input type="text" name="subcategory_name" required></td>
	</tr>
	<tr>
		<td> Category</td>
		<td>
		<select name="category_id">
                                <?php
                                $cn=mysqli_connect("localhost","root","","vastra") or die(mysqli_eroor());
                                $sql="select * from category";
                                $res=mysqli_query($cn,$sql);
                                while($arr=mysqli_fetch_array($res)){
                                    ?>
									
                                <option value="<?php echo $arr['category_id'] ?>"><?php echo $arr['category_name'] ?></option>
                                <?php
                                }
                                mysqli_close($cn);
                                ?>
                                </select>
         </td>                   
	</tr>
	<tr>
		<td colspan ="2" align="center"> <input type="submit" value="submit" name="btnsubmit">
		</td>
	</tr>
</table>
</form>
	<?php
		$cn=mysqli_connect("localhost","root","","vastra") or die(mysql_error());
		$sql="select * from sub_category";
		$result=mysqli_query($cn,$sql);
		echo "<table border='1'>";
		
		echo "<tr>";
		echo "<th>subcategory id</th>";
		echo "<th>subcategory name</th>";
		echo "<th>category id</th>";
		echo "<th> Add new </th>";
		echo "</tr>";
		
		
		while($row=mysqli_fetch_array($result))
			{	
				echo "<tr>";
				echo "<td>${row['subcategory_id']}</td>";
				echo "<td>${row['subcategory_name']}</td>";
				echo "<td>${row['category_id']}</td>";
				echo "<td><a href='sub_category_edit.php?subcategory_id={$row['subcategory_id']}'>Edit</a>|<a href='sub_category_delete.php?subcategory_id=${row['subcategory_id']}'>delete</a></td>";
				echo "</tr>";
			}
			echo "<tr><td colspan='5'>".mysqli_num_rows($result)."records found</td></tr>";
			echo "</table>";
			mysqli_close($cn);
			?>
				
		
</body>
</html>
 