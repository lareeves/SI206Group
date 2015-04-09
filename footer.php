<footer>
	<p>Last Modified: 
	<?php
		date_default_timezone_set('America/Detroit');
		if (file_exists($fName)) {
    		echo date("F d Y H:i:s", filemtime($fName));
		}
	?>
	&copy;  Gin Chairuangsang, Josh Kogan, Vikram Rajagopalan, Lauren Reeves</p>


</footer>