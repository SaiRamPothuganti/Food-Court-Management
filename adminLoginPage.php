<!DOCTYPE html>
<html>
<head>
<style>
.center{
				margin:auto;
				width:25%;
			}
body {
   background-image: url("Admin.png");
    background-color: #cccccc;
	background-repeat: no-repeat; 
	  background-size:cover;
	  
}
</style>
</head>

	<body>
<font color="#White">
	<div class="center">
		<h1> <b> FOOD COURT <b> </h1>
		<h2> Admin  Login </h2>
		
				<form method="post" action="admin_homepage.php">
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
			
				<td><input   type="submit" value="Login"/><td>			
			</tr>
			
			</form>
			
		</table>
	</div>
	</body>

	</html>