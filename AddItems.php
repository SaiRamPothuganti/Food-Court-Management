<!DOCTYPE html>
<html>
	
	<head>
		<title>Item Types</title>
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
	<form method="post" action="AddItemsProces.php">
	<div class="center">
		<h1> <b> <font color="#cc6600">Add Item Types </b> </h1>
		
		
		<table cellpadding="5" cellspacing="5">
			<tr>
				<td> <font color="#cc6600"><h2><label>Number :</label></td> 
				<td><input type = "text" name="ItemNumber"/></td>
			</tr>
			<tr>
				<td><font color="#cc6600"><h2><label>Type:</label></td>
				<td><input type="text" name="ItemType"/></td>
			</tr>
			
			
			<tr>
				<td><input type="image" src="add.jpg" alt="Submit" width="48" height="48"><td>			
			</tr>
			
			</form>
			
		</table>
	</div>
	</body>

</html>
