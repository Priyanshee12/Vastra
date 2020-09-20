<?php session_start() ?>


?>
<title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
 
</head>
<body>
<?php
	
	
	$msg = "";
	extract($_POST);
	if(isset($submit)) {
		 $cn=mysqli_connect("localhost","root","","vastra") or die(mysqli_eroor());
		$sql = "select count(*) from user where email_id = '$email_id' and password = '$password'";
		$res = mysqli_query($cn,$sql);
		$arr = mysqli_fetch_array($res);
		$user1_id = $arr[0];

$sql1 = "select user_fname from user where email_id = '$email_id' and password = '$password'";
		$res1 = mysqli_query($cn,$sql1);
		$arr1 = mysqli_fetch_array($res1);
		$user_fname = $arr1[0];


$sql2 = "select user_id from user where email_id = '$email_id' and password = '$password'";
		$res2 = mysqli_query($cn,$sql2);
		$arr2 = mysqli_fetch_array($res2);
		$user_id = $arr2[0];		

		if($user1_id>0)
		{
			
			$_SESSION['user_id'] = $user_id;
			$_SESSION['user_fname'] = $user_fname;
			         echo $_SESSION['user_id'];
			header("Location: /project/customer/search.php");
			die;
		}
		else	
			{	
			$msg = "Access deny";
			header("Location:newlogin.php");
			}
		mysqli_close() or die(mysqli_error());
	}
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.png">

    <title>Login | Customer</title>

    <!-- Bootstrap core CSS -->
    <link href="css/animated.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">

    

    <!-- Custom styles for this template -->
    
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
<div align = "center">
<div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>

    

	<form method="post"  class="form-signin animated shake" bordercolor="black" style="float: center;" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

		
		

                 <table >
                            <tr>
                            <td> <h5>Email id</h5></td>
                                <td>
                        <input 	type="User_name" class="form-control" required placeHolder="Enter email"
			title="Enter correct Username"
			value=""
			name="email_id" /></td>
		
                            </td>
                        </tr>
						<tr>
						<td></td>
						</tr>
						</br>
						<tr>
                        <td><h5>Password</h5></td>
                        <td>
		<input 	type="Password" class="form-control"
			required
			autofocus
			placeHolder="EnterPassword"
			name="password"/>
                            </td>   </tr>
                        <tr><td>
                                <input class="btn btn-lg btn-primary btn-block" 	type="submit"
			name="submit"
			value="Login" />

            </td>
        </tr>
        
        </table>

		
	</form>
	</div>
	</div>
	</div>
	<div style="clear: both;"><?php echo $msg; ?></div>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
