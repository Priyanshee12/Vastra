<?php include_once("inc/header.php");?><html>
   
   <head>
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
   
   <body bgcolor = "#FFFFFF">
   
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "loginv.php" method = "post">
                  <label>UserName  :</label><input type = "text" name = "email" required=""  class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "pass" required="" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />				  <a href="forgotpass.php">forgot password</a><br><br><br><a href="preg.php">Registration </a>
               </form>								   
            </div>
				
         </div>
			
      </div>

   </body>
</html><?php include_once("inc/footer.php");?>