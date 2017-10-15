<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "foodcourt";

// Create connection
$connect = new mysqli($servername, $username, $password, $dbname); 

 if(isset($_POST["submit"]))  
 {  
      if($_FILES['file']['name'])  
      {  
           $filename = explode('.',$_FILES['file']['name']);  
           if($filename[1] == 'csv')  
           {  
                $handle = fopen($_FILES['file']['tmp_name'], "r");  
                while($data = fgetcsv($handle))  
                {                 
                     $item1 = mysqli_real_escape_string($connect, $data[0]);  
                     $item2 = mysqli_real_escape_string($connect, $data[1]);
					 $item3 = mysqli_real_escape_string($connect, $data[2]);					 
                     $item4 = mysqli_real_escape_string($connect, $data[3]);
					 $item5 = mysqli_real_escape_string($connect, $data[4]);
//INSERT INTO `stock`(`StockID`, `Type`, `Name`, `Quantity`, `Price`) VALUES  ([value-1],[value-2],[value-3],[value-4],[value-5])					 
					 $sql="INSERT into stock(StockID, Type,Name,Quantity,Price) values($item1,'$item2','$item3',$item4,$item5)";  
                     mysqli_query($connect, $sql);  
                }  
                fclose($handle);  
                print "Import done";  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial</title>   
 <style>
			
	body {
   background-image: url("WEBSITE-.jpg");
    background-color: #cccccc;
	background-repeat: no-repeat; 
	  background-size:cover;
}		

		</style>		   
      </head>  
      <body>  
           <form method='POST' enctype='multipart/form-data'>  
                <div align="center">  
                     <p>Upload CSV: <input type='file' name='file' /></p>  
                     <p><input type='submit' name='submit' value='Import' /></p>  
                </div>  
           </form>  
      </body>  
 </html>  