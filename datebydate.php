<!DOCTYPE html>
<html>
	
	<head>
		<title>Available Items</title>
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
		<h1> <font color="#cc6600"><b> Today Sales </b> </h1>
		
		<form method="post" action="ViewItemsProcess.php">
		<table cellpadding="5" cellspacing="5" border =1 >
		<tr>
		<th> Id</th>
		<th> ItemName </th>
		<th> Quantity </th>
		<th> Price </th>
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

				//SELECT `datesoled`, `ItemName`, `Quantity`, `Cost`, `id` FROM `` WHERE 1
				$sql = "SELECT datesoled, ItemName, Quantity,Cost,id FROM billtrans where datesoled = ".date("y-m-d");
				//echo date("y-m-d");
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						   echo "<tr>";
						   echo "<td>".$row['id']."</td>";
						   echo "<td>".$row['ItemName']."</td>";
						   echo "<td>".$row['Quantity']."</td>";
						   echo "<td>".$row['Cost']."</td>";
						  echo "</tr>";
					
					}
				} else {
					echo "0 results";
				}	


			?>
			
		</table>
		</form>
		<br/><br/><br/><br/><br/>

		<a href = "admin_homepage.php" > goto home page	 </a>
	</div>
	</body>

</html>
