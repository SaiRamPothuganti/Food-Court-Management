<!DOCTYPE html>
<html>
<head>
<style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
body {
   background-image: url("Admin.png");
    background-color: #cccccc;
	background-repeat: no-repeat; 
	  background-size:cover;
}
</style>
</head>
<body>

<h2>Admin Home</h2>

<div class="dropdown">
  <button class="dropbtn">Add</button>
  <div class="dropdown-content">
    <a href="AddItems.php">Item Type </a>
    <a href="ItemName.php">Item Name </a>
    <a href="new_emp.php">Employee</a>
  </div>
</div>



<div class="dropdown">
  <button class="dropbtn">Update</button>
  <div class="dropdown-content">
    <a href="UpdateStock.php">Stock </a>

  </div>
</div>


<div class="dropdown">
  <button class="dropbtn">View Sales</button>
  <div class="dropdown-content">
    <a href="datebydate.php">Today Sales</a>
    <a href="saleout.php"> Total Sales till now  </a>
    

  </div>
</div>
 <button class="dropbtn" onClick = "window.close();">Logout </button>
</body>
</html>

