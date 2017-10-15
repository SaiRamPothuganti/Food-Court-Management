<!DOCTYPE html>
<html>
	
	<head>
		<title>Make Sales</title>
		<style>
			.center{
				margin:auto;
				width:25%;
			}
		body {
   background-image: url("WEBSITE-BACKGROUND_d1450.jpg");
    background-color: #cccccc;
	background-repeat: no-repeat; 
	  background-size:cover;
}
		</style>

	</head>
	
	<body style="background-color:#ecffb3">
	<div class="center">
		<h1><font color = "RED"> <b> Make Sales </b> </h1>
			<form method="post" action="Salesprocess.php">
		
		<table cellpadding="5" cellspacing="5">
			
			
			<tr>
				<td><label>Name</label></td>
					<td>
					<select name="ItemName" id= "name">
					<?php 
										
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "foodcourt";

					// Create connection SELECT `ItemNo`, `ItemName`, `ItemType`, `Price` FROM `items` WHERE 1  
					$connection = new mysqli($servername, $username, $password, $dbname);
					
					$sql = mysqli_query($connection, "SELECT ItemName FROM items");
					while ($row = $sql->fetch_assoc()){
					echo "<option value=". $row['ItemName'] ." >" . $row['ItemName'] . "</option>";
					}
					?>
					</select>
					</td>	
			</tr>
			<tr>
				<td> <label>Quantity  </label></td> 
				<td> <input type = "text" name = "quant"></td>
			</tr>
			<tr>
				<td> <label>Cost :</label></td> 
				<td><input type = "text" name="Price"/></td>
			</tr>
			
			<tr>
			
				<td><input   type="submit" value="Make Sales"/><td>			
			</tr>
			
			<tr >
			
			
	</div>
	</body>

</html>
