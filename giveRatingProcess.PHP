
<?php 
 


$name = $_POST['name'];
$ItemName = $_POST['ItemName'];
$Rating =   $_POST['Rating'];
$Review  =  $_POST['Review'];
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
// INSERT INTO `reviews_ratings`(`ItemName`, `Review`, `Rating`, `customerName`) VALUES ([value-1],[value-2],[value-3],[value-4])
$sql = "INSERT INTO reviews_ratings (ItemName, Review,Rating,customerName) VALUES ('$ItemName','$Review',$Rating,'$name')";

if ($conn->query($sql) === TRUE) {
    echo "<head>
        <title>Sucess</title>
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
     <b> <p><font color='Green' > Sucessfully <br/> Review has submited </p>
      <a href = 'ViewRating.php'> view ratings </a>
	  <br/>
	  <a href = 'ViewItems.php'> View Items </a>
    </div>
    </body>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>