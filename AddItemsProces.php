
<?php 
 
echo $_POST['ItemNumber'];
echo '<br />';
echo $_POST['ItemType'];

$ItemNumber = $_POST['ItemNumber'];
$ItemType = $_POST['ItemType'];

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
//INSERT INTO `itemmaster`(`ItemTypNo`, `ItemType`) VALUES ([value-1],[value-2])
$sql = "INSERT INTO itemmaster (ItemTypNo, ItemType) VALUES ($ItemNumber,'$ItemType')";

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
     <b> <p><font color='Green' > Sucessfully <br/> ItemType has added to Database </p>
      <a href='admin_homepage.php'> home page </a>
    </div>
    </body>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>