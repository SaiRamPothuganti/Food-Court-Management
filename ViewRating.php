<!DOCTYPE html>
<html>
	
	<head>
		<title>Rating & review of Items</title>
		<style>
			.center{
				margin:auto;
				width:25%;
			}
							body {
   background-image: url("4237533-background-hd.jpg");
    background-color: #cccccc;
	background-repeat: no-repeat; 
	  background-size:cover;
}
		</style>

	</head>
	
	<body style="background-color:#ecffb3">
	<div class="center">
		<h1> <font color="#cc6600"><b> Rating & review of Items </b> </h1>
		
		
		<table cellpadding="5" cellspacing="5" border =1 >
		<tr>
		<th> ItemName</th>
	<th> customer name</th>
	<th> Rating</th>
	<th> Review</th>
		</tr>
			<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "foodcourt";

				// Create connection
				$conn = new mysqli($servername, $username, $password,$dbname);

				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				} 
				//echo "Connected successfully";

				//SELECT `ItemName`, `Review`, `Rating`, `customerName` FROM `reviews_ratings` WHERE 1
				$sql = "SELECT ItemName, Review, Rating,customerName FROM reviews_ratings";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						   echo "<tr>";
						   echo "<td>".$row['ItemName']."</td>";
						   echo "<td>".$row['customerName']."</td>";
						   echo "<td>".$row['Rating']."</td>";
						   echo "<td>".$row['Review']."</td>";
						  echo "</tr>";
					
					}
				} else {
					echo "0 results";
				}	


			?>
			
		</table>

		<br/><br/><br/>
		<a href = "giveRating.php"> Give rating to Item </a>

		
	</div>
	</body>

</html>
