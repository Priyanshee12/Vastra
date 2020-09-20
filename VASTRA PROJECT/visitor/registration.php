<?php session_start() ?>
<?php include_once("inc/header.php");
?>
              
                
		
		<table border=1 align="center">
		<h1 align="center">Regestration Form</h1>
		<form action="insertregestration.php" method="post">
		<tr>
			<td>First name</td>
			<td><input type="text" name="first_name" required></input></td>
		</tr>
		<tr>
			<td>Last name</td>
			<td><input type="text" name="last_name" required></input></td>
		</tr>
		<tr>
			<td>dob</td>
			<td><input type="date" name="dob" required></input></td>
		</tr>
		<tr>
			<td>address</td>
			<td><textarea name="address" required></textarea></td>
		</tr>
		<tr>
			<td>contact_number</td>
			<td><textarea name="contact_number" required></textarea></td>
		</tr>


<tr>
			<td>City</td>
			<td>
                            <select name="city_id">
                                <?php
                                $cn=mysqli_connect("localhost","root","","Vastra") or die(mysqli_eroor());
                                $sql="select * from city";
                                $res=mysqli_query($cn,$sql);
                                while($arr=mysqli_fetch_array($res)){
                                    ?>
                                <option value="<?php echo $arr['city_id'] ?>"><?php echo $arr['city_name'] ?></option>
                <?php
                                }
                                mysqli_close($cn);
                                ?>
                                </select>
                                
                                
                        </td>
		</tr>

		<tr>
			<td>pincode</td>
			<td><input type="text" name="pincode"required></input></td>
		</tr>
		<tr>
			<td>email_id</td>
			<td><input type="email" name="email_id" required></input></td>
		</tr>
		<tr>
			<td>password</td>
			<td><input type="password" name="password" required></input></td>
		</tr>
		<tr>
			<td>gender</td>
			<td><input type="radio" name="gen">male</input>
			<input type="radio" name="gen">female</input></td>
		</tr>
		<tr>
			<td>security_que</td>
			<td><select name=security_que>
			<option value="what is your favourite color">what is your favourite color</option>
			<option value="what is your favourite car">what is your favourite car</option>
			<option value="what is your favourite country">what is your favourite country</option>
			</select>
			</td>
		</tr>
		<tr>
			<td>security_ans</td>
			<td><input type="text" name="security_ans" required></input></td></br>
		</tr>
		
		<tr>
			<td></td>
			<td> <button>submit</button> </td>
		</tr>	
		</form>
</table>
<?php
		if(isset($_SESSION['msg'])){
		   echo $_SESSION['msg'];
		   unset($_SESSION['msg']);
		}
		?>
</div>
            </div>
        </div>
	
</body>
</html>
<?php include_once("inc/footer.php");
?>