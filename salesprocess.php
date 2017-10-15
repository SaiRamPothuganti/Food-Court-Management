
<?php 
 
$dsoled = date("y-m-d");
$ItemName = $_POST['ItemName'];
$quant =   $_POST['quant'];
$Price  =  $_POST['Price'];
//$Quantity = $_POST['Quantity'];



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
// INSERT INTO `BillTrans`(`BId`, `BMId`, `ItemName`, `Quantity`, `Cost`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])
$sql = "INSERT INTO BillTrans (datesoled,ItemName, Quantity,Cost) VALUES ('$dsoled','$ItemName',$quant,$Price)";

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
     <b> <p><font color='Green' > Sucessfully <br/> please take your item </p>
      <a href='sales.php'> buy one more product </a>
    </div>
    </body>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>