<?php session_start() ?>

              
                
		<table border="1">
		
		<form action="insertregestration.php" method="post">
		<tr>
			<td>First name</td>
			<td><input type="text" name="first_name"></input></td>
		</tr>
		<tr>
			<td>Last name</td>
			<td><input type="text" name="last_name"></input></td>
		</tr>
		<tr>
			<td>dob</td>
			<td><input type="date" name="dob"></input></td>
		</tr>
		<tr>
			<td>address</td>
			<td><textarea name="address"></textarea></td>
		</tr>

<tr>
			<td>City</td>
			<td>
                            <select name="city_id">
                                <?php
                                $cn=mysqli_connect("localhost","root","","vastra") or die(mysqli_eroor());
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
			<td><input type="text" name="pincode"></input></td>
		</tr>
		<tr>
			<td>email_id</td>
			<td><input type="email" name="email_id"></input></td>
		</tr>
		<tr>
			<td>password</td>
			<td><input type="password" name="password"></input></td>
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
			<td><input type="text" name="security_ans"></input></td></br>
		</tr>
		
		<tr>
			<td></td>
			<td> <button>submit</button> </td>
		</tr>	
		</form>
</table>
</div>
            </div>
        </div>

	
</body>
</html>