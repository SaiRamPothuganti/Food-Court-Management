<!DOCTYPE html>
<html>
	
	<head>
		<title>User Login</title>
		<style>
			.center{
				margin:auto;
				width:25%;
			}
			body {
   background-image: url("background-learner.jpg");
    background-color: #cccccc;
	background-repeat: no-repeat; 
	  background-size:cover;
}
		
		</style>

	</head>
	
	<body style="background-color:#ecffb3">
	<div class="center">
		<h1> <b> FOOD COURT <b> </h1>
		<h2> User Login </h2>
		<form method="post" action="ViewItems.php">
		
		<table cellpadding="5" cellspacing="5">
			<tr>
				<td> <label>User Name :</label></td> 
				<td><input type = "text" name="uname"/></td>
			</tr>
			<tr>
				<td><label>Password:</label></td>
				<td><input type="password" name="pwd"/></td>
			</tr>
			
			
			<tr>
			<td><a href="ForgetPassWord.html"> Forget Password </a></td>
				<td><input   type="submit" value="Login"/><td>			
			</tr>
			</form>
			
			
		</table>
	</div>
	</body>

</html>
