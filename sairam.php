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
                     $sql="INSERT into tbl_excel(excel_name, excel_email) values('$item1','$item2')";  
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