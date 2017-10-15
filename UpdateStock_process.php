
<?php 
 
echo $_POST['StockID'];

$StockID = $_POST['StockID'];
$ItemType = $_POST['ItemType'];
$ItemName =   $_POST['ItemName'];
$Quantity  =  $_POST['Quantity'];
$Amount = $_POST['Amount'];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "foodcourt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// INSERT INTO `stock`(`StockID`, `Type`, `Name`, `Quantity`, `Price`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])
$sql = "INSERT INTO stock (StockID, Type,Name,Quantity,Price) VALUES ($StockID,'$ItemType','$ItemName',$Quantity,$Amount)";

if ($conn->query($sql) === TRUE) {
    echo "<head>
        <title>Hello World</title>
        <style>
body {
   background-image: url('4237533-background-hd.jpg');
    background-color: #cccccc;
	background-repeat: no-repeat; 
	  background-size:cover;
}
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            width: 100%;
        }

        body {
            display: table;
        }

        .my-block {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }
		p {
    font-size: 60px;
}
        </style>
    </head>
    <body>
    <div class='my-block'>
     <b> <p><font color='Green' > Sucessfully <br/> Stock is updated </p>
      <a href='admin_homepage.php'> home page </a>
    </div>
    </body>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>