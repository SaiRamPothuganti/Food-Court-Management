<html>  
      <head>  
           <title>Export Current Stock data to Excel </title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
		   <style>
			
	body {
   background-image: url("WEBSITE-BACKGROUND_d1450.jpg");
    background-color: #cccccc;
	background-repeat: no-repeat; 
	  background-size:cover;
}		

		</style>
      </head>  
      <body>  
           <div class="container">  
                <br />  
                <br />  
                <br />  
                <div class="table-responsive">  
                   <font 	color = "GREEN">  <h2 align="center">Export Current Stock data to Excel </h2><br />  
                     <div id="live_data"></div>       
                     <form method="post" action="excel.php" >  
                          <input type="submit" name="export_excel" class="btn btn-success" value="Export to Excel" />  
                     </form>  
                </div>  
           </div>  
      </body>  
 </html>  