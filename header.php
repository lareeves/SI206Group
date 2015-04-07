<header>
	
	<style type="text/css">
		

	</style>
	
	<h1 id="main_title">UofM Rate My Class</h1>

	<!-- modified from: http://www.textfixer.com/tutorials/html-search-box.php -->
	<!-- HTML for SEARCH BAR -->
	<div id="searchbarwrap">
		<form id="newsearch" method="get" action="http://www.google.com">
		        <input type="text" id="textinput" name="textinput" maxlength="120" 
		         placeholder="Search"><input type="submit" value="GO" id="gobutton">
		</form>
			<!-- <div class="tfclear"></div> -->
	</div>


	<nav id="navigation">
		<a href = "index.php" class="mainlink"
			<?php
				if ($fName == "index.php"){
					echo "class = \"current\"";
				}
			?>
			>Home</a>

		<a href = ".php" class="mainlink"
			<?php
				if ($fName == ".php"){
					echo "class = \"current\"";
				}
			?>
			>Link 2</a>

		<a href = ".php" class="mainlink"
			<?php
			if ($fName == ".php"){
				echo "class = \"current\"";
			}
			?>
			>Link 3</a>

		<a href = ".php" class="mainlink"
			<?php
			if ($fName == ".php"){
				echo "class = \"current\"";
			}
			?>
			>Link 4</a>
		<a href = ".php" class="mainlink"
			<?php
			if ($fName == ".php"){
				echo "class = \"current\"";
			}
			?>
			>Link 5</a>
	</nav>	
</header>

