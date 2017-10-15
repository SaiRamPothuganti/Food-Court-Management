<!DOCTYPE html>
<html>
	
	<head>
		<title>Rating & review</title>
		<style>
			.center{
				margin:auto;
				width:25%;
			}
							body {
   background-image: url("s.jpg");
    background-color: #cccccc;
	background-repeat: no-repeat; 
	  background-size:cover;
}
		</style>

	</head>
	
	<body style="background-color:#ecffb3">
	<div class="center">
		<h1> <font color="White"><b> Ratings </b> </h1>
		
		<form method="post" action="giveRatingProcess.php">
		<table cellpadding="5" cellspacing="5">
			<tr>
				<td><font color="White"> <h2><label>Name :</label></td> 
				<td><input type = "text" name="name"/></td>
			</tr>
			<tr>
				<td><font color="White"> <h2><label>Item Name:</label></td>
					<td>
					<select name="ItemName">
					<?php 
										
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "foodcourt";

					// Create connection SELECT  `ItemType` FROM `itemmaster`  
					$connection = new mysqli($servername, $username, $password, $dbname);
					//SELECT `ItemNo`, `ItemName`, `ItemType`, `Price` FROM `items` WHERE 1
					$sql = mysqli_query($connection, "SELECT ItemName FROM items");
					while ($row = $sql->fetch_assoc()){
					echo "<option value=". $row['ItemName'] ." >" . $row['ItemName'] . "</option>";
					}
					?>
					</select>
</td>	
			</tr>
			<tr>
				<td> <font color="White"> <h2><label>Rating out of 5 :</label></td> 
				<td><input type = "text" name="Rating"/>/5</td> 
			</tr>
			
			
			<tr>
				<td> <font color="White"> <h2><label>Review :</label></td> 
				<td>Review about the item : (max length is 250)<br/>
			<textarea maxlength="250" rows="4" cols="35" name = "Review"></textarea><br/><br/></td>
			</tr>
			
			<tr>
			<td>
					<input type = "submit" value = "submit"></input>
			<td>
			</tr>
			
			
			</form>
		</table>
	</div>
	</body>

</html>
