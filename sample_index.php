<?php
	$fName = basename(__FILE__);
	include("head.php")
?>

<!-- debugging -->
<style>
	#center{
		text-align: center;
		background-color: yellow;
	}
</style>
<!-- debugging -->

<body>
	<?php
		include("header.php");
	?>
	<section id="center">
		<h3>Main section</h3>
		<ol>
			<li>Item 1</li>
			<li>Item 2</li>
			<li>Item 3</li>
		</ol>	
	</section>
	
	<?php
		// include("footer.php");
	?>
</body>
</html>

