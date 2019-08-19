
<?php

include 'geo_details.php';
?>


<!DOCTYPE html>

<html>
     <head>

       <meta charset="UTF-8">
       <link rel="stylesheet" type="text/css" href="geo.css">

          
</head>


<body>

<div class="main">

	<form method = "POST" action = "geo_details.php">

		<div class="container">
				
			  		Lat : <input type = "text" name = "lat"><BR>
			  		lang : <input type = "text" name = "long"><BR>
		</div><!--container-->
					
					<div class="button">		 
			  <input type = "submit" name = "locate" value = "locate">
			  				<!--<input type="submit" class="button" value="locate">-->
         

					</div><!--button-->
 				</form>
</div><!--main-->
 				
 
		<h2>Use Google Search</h2>
 
					<p>
						<iframe height="400px" width="100%" frameBorder="0" scrolling="no"
    						src="https://developers.google.com/maps/documentation/utils/geocoder/embed"><br />
					</iframe>
				</p>

  
</body>
</html>