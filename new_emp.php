<!DOCTYPE html>

<!-- Form to enter the details of new Employee -->
<html>
	<head>
		<title>Employee Details</title>
		<style>
			.center{
				margin:auto;
				width:25%;
			}
					body {
   background-image: url("EmployeesAdd.jpg");
    background-color: #cccccc;
	background-repeat: no-repeat; 
	  background-size:cover;
}
		
		</style>
	</head>
	
	<body style="background-color:#ecffb3">
	
		<div class="center">
		
			<h1><b>Please Enter Details:</b></h1><br/><br/>
			
			<form method="POST"  action="new_emp_process.php">
			
			First Name: 
			<input type="text" name="firstName"/><br/><br/>
			LastName:   
			<input type="text" name="lastName"/><br/><br/>
			Gender: 
			<input type= "radio" name="gender" value="male"/>Male &nbsp &nbsp <input type= "radio" name="gender" value="female"/> Female <br/><br/>
			DOB: 
			<input type="date" name="dob"/><br/><br/>
			Employee Type: 
			<select name="type">
				<option value="select">--Select--</option>
				<option value="ft">Full Time</option>
				<option value="pt">Contract</option>
			</select><br/><br/>
			Briefly describe about your previous experience: (max length is 250)<br/>
			<textarea maxlength="250" rows="4" cols="35" name = "description"></textarea><br/><br/>
			<input type="submit" value="Submit"/>
			</form>
		</div>
	</body>
</html>
