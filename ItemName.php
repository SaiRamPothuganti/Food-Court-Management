<!DOCTYPE html>
<html>
	
	<head>
		<title>Item Name</title>
		<style>
			.center{
				margin:auto;
				width:25%;
			}
							body {
   background-image: url("ItemsAddition.jpg");
    background-color: #cccccc;
	background-repeat: no-repeat; 
	  background-size:cover;
}
		</style>

	</head>
	
	<body style="background-color:#ecffb3">
	<div class="center">
		<h1> <font color="#cc6600"><b> Add Items </b> </h1>
		
		<form method="post" action="ItemNameProces.php">
		<table cellpadding="5" cellspacing="5">
			<tr>
				<td><font color="#cc6600"> <h2><label>Number :</label></td> 
				<td><input type = "text" name="number"/></td>
			</tr>
			<tr>
				<td><font color="#cc6600"> <h2><label>Type:</label></td>
					<td>
					<select name="ItemType">
					<?php 
										
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "foodcourt";

					// Create connection SELECT  `ItemType` FROM `itemmaster`  
					$connection = new mysqli($servername, $username, $password, $dbname);
					
					$sql = mysqli_query($connection, "SELECT ItemType FROM itemmaster");
					while ($row = $sql->fetch_assoc()){
					echo "<option value=". $row['ItemType'] ." >" . $row['ItemType'] . "</option>";
					}
					?>
					</select>
</td>	
			</tr>
			<tr>
				<td> <font color="#cc6600"> <h2><label>Name :</label></td> 
				<td><input type = "text" name="name"/></td>
			</tr>
			
			
			<tr>
				<td> <font color="#cc6600"> <h2><label>Price :</label></td> 
				<td><input type = "text" name="Price"/></td>
			</tr>
			
			<tr>
				<td><input type="image" src="add.jpg" alt="Submit" width="48" height="48"><td>			
			</tr>
			
			
			</form>
		</table>
	</div>
	</body>

</html>
