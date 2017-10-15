<?php  
 $connect = mysqli_connect("localhost", "root", "", "foodcourt");  
 $output = '';  
 if(isset($_POST["export_excel"]))  
 {  //SELECT * FROM `stock` WHERE 1
      $sql = "SELECT * FROM stock";  
      $result = mysqli_query($connect, $sql);  
      if(mysqli_num_rows($result) > 0)  
      {  
           $output .= '  
                <table class="table" bordered="1">  
                     <tr>  
                          <th>Id</th>  
                          <th>Type</th>  
                          <th>Name</th>  
						  <th>Quantity</th>  
						  <th>Price</th>  
                     </tr>  
           ';  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>'.$row["StockID"].'</td>  
                          <td>'.$row["Type"].'</td>  
                          <td>'.$row["Name"].'</td>  
						  <td>'.$row["Quantity"].'</td> 
						  <td>'.$row["Price"].'</td> 
                     </tr>  
                ';  
           }  
           $output .= '</table>';  
           header("Content-Type: application/xls");   
           header("Content-Disposition: attachment; filename=Sales.xls");  
           echo $output;  
      }  
 }  
 ?> 