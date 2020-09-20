<?php session_start()?>
<html>
	<body>
			<?php 
			$cn=mysqli_connect("localhost","root","","vastra") or die ("check connection");
			$product_name=$_POST['product_name'];
			$product_price=$_POST['product_price'];
			$description=$_POST['description'];
			$product_size=$_POST['product_size'];
			$category_id=$_POST['category_id'];
			$quantity=$_POST['quantity'];
			
$Movie_image = $_FILES['file']['name'];


$target="images/".basename($_FILES['file']['name']);
        if ($_FILES['file']['name'] != "") {
            move_uploaded_file($_FILES['file']['tmp_name'], $target) or
                    die("Could not copy file!");
        } else {
            die("No file specified!");
        }
       
			$sql="insert into product (product_name,product_price,description,category_id,product_size,image,quantity)values ('$product_name','$product_price','$description','$category_id','$product_size','$Movie_image','$quantity')";
			echo $sql;
			$result=mysqli_query($cn,$sql);
			echo $result;
			$_SESSION['msg']="product inserted";
			header("Location:product.php");
		?>
		</body>
	</html>