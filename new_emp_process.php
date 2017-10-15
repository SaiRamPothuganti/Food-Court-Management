
<?php 
 
echo $_POST['description'];;
echo '<br />';
echo $_POST['gender'];

$fname = $_POST['firstName'];
$lname = $_POST['lastName'];
$gender =  $_POST['gender'];
$dob = $_POST['dob'];
$type =$_POST['type'];
$description =$_POST['description'];

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
//INSERT INTO `employee`(`Fname`, `Lname`, `Gender`, `EmployeeType`, `description`, `dob`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
$sql = "INSERT INTO employee (Fname, Lname,Gender,EmployeeType,description,dob) VALUES ('$fname','$lname','$gender','$type','$description','$dob')";

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
     <b> <p><font color='Green' > Sucessfully <br/> Employee has added to Database </p>
      <a href='admin_homepage.php'> home page </a>
    </div>
    </body>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>