<!-- ****GIN**** -->

<header>
	
	<script type="text/javascript">
	function search()
	{
	    url = "https://www.google.com/#q=";
	    url += "site:www.umratemyclass.com+";
	    url += document.getElementById("textinput").value;
	    window.open(url,'_blank');
	}
	</script>
	
	<h1 id="main_title"><img alt="Rate My Class Banner" src="banner.png"></h1>

	<!-- modified from: http://www.textfixer.com/tutorials/html-search-box.php -->
	<!-- HTML for SEARCH BAR -->
	<div id="searchbarwrap">
		<form id="newsearch" onsubmit="search()">
		        <input type="text" id="textinput" name="textinput" maxlength="120" 
		         placeholder="Search"><input type="submit" value="GO" id="gobutton">
		</form>
			<!-- <div class="tfclear"></div> -->
	</div>

	<nav id="navigation">
		<a href = "index.php"
			<?php
				if ($fName == "index.php"){
					//echo '<script type="text/javascript">alert("index!");</script>';
					echo "class = \"current\"";
				}
				else
					//echo '<script type="text/javascript">alert("no!");</script>';
			?>
			>Home</a>

		<a href = "EngineeringPage.php"
			<?php
				if ($fName == "EngineeringPage.php"){
					echo "class = \"current\"";
				}
			?>
			>Eng</a>

		<a href = "LSAPage.php"
			<?php
			if ($fName == "LSAPage.php"){
				echo "class = \"current\"";
			}
			?>
			>LSA</a>

		<a href = "SchoolofInfoPage.php" 
			<?php
			if ($fName == "SchoolofInfoPage.php"){
				echo "class = \"current\"";
			}
			?>
			>SI</a>
		<a id="submitreview" href = "form.php"
			<?php
			if ($fName == "form.php"){
				echo "class = \"current\"";
			}
			?>
			>Submit a Review</a>
	</nav>	
	<!--script>
   
// function showText(show)
// {
//     var p = document.getElementById(show);
//     if(p.style.display='none') {
//     	p.style.display='block';
//     }
//     else {
//     	p.style.display='none';
//     }
// }
// 	</script-->
</header>
