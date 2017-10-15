<!DOCTYPE html>
<html>
	
	<head>
		<title>Update Stock</title>
		<style>
			.center{
				margin:auto;
				width:25%;
			}
			body{
		background-image: url("s.jpg");
    background-color: #cccccc;
	background-repeat: no-repeat; 
	  background-size:cover;
	  }
		</style>

	</head>
	
	<body style="background-color:#ecffb3">
	<div class="center">
		<h1><font color="#FFFFFF"> <b> Update Stock </b> </h1>
		
		<form method="post" action="UpdateStock_process.php">
		<table cellpadding="5" cellspacing="5">
			<tr>
				<td><font color="#FFFFFF">  <label>StockID :</label></td> 
				<td><input type = "text" name="StockID"/></td>
			</tr>
			<tr>
				<td><font color="#FFFFFF"> <label>Type:</label></td>
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
			</tr>
			<tr>
				<td><font color="#FFFFFF"> <label>Name:</label></td>
					<td>
					<select name="ItemName">
					<?php 
										
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "foodcourt";

					// Create connection SELECT  `ItemName` FROM `items`  
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
				<td> <font color="#FFFFFF"> <label>Quantity :</label></td> 
				<td><input type = "text" name="Quantity"/></td>
			</tr>
			<tr>
				<td><font color="#FFFFFF">  <label>Amount :</label></td> 
				<td><input type = "text" name="Amount"/></td>
			</tr>
			
			<tr>
				<td><input   type="submit" value="Add"/><td>			
			</tr>
			</form>
			
			
		</table>
	</div>
	</body>

</html>
