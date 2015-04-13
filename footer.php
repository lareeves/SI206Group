<footer>
	<p>Last Modified: 
	<?php
		date_default_timezone_set('America/Detroit');
		if (file_exists($fName)) {
    		echo date("F d Y H:i:s", filemtime($fName));
		}
	?><p>
	<p>&copy;  Gin Chairuangsang, Josh Kogan, Vikram Rajagopalan, Lauren Reeves </p>
	<div id="social">
		<!-- Modified from: http://lipis.github.io/bootstrap-social/ -->
		<a class="btn btn-social-icon btn-facebook">
		    <i class="fa fa-facebook"></i>
		</a>
		<a class="btn btn-social-icon btn-twitter">
			<i class="fa fa-twitter"></i>
		</a>
	</div>

</footer>