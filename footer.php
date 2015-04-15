<footer>
	<p id="last_modified">Last Modified: 
	<?php
		date_default_timezone_set('America/Detroit');
		if (file_exists($fName)) {
    		echo date("F d Y H:i:s", filemtime($fName));
		}
	?><p>
	<p id="names">&copy;  Gin Chairuangsang, Josh Kogan, Vikram Rajagopalan, Lauren Reeves </p>
	<div id="social">
		<!-- Modified from: http://lipis.github.io/bootstrap-social/ -->
		<a alt="link to facebook" class="btn btn-social-icon btn-facebook" target="_blank" href="https://www.facebook.com/universityofmichigan">
		    <i class="fa fa-facebook"></i>
		</a>
		<a alt ="link to twitter" class="btn btn-social-icon btn-twitter" target="_blank" href="https://twitter.com/umich">
			<i class="fa fa-twitter"></i>
		</a>
	</div>

</footer>