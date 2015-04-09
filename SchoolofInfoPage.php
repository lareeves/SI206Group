
<?php
	$fName = basename(__FILE__);
	include("head.php")
?>
<body>
	<?php
		include("header.php");
	?>

<script type="text/javascript">
	function showText(show)
{
    var p = document.getElementById(show);
    if(p.style.display == 'none' || p.style.display == '') {
    	p.style.display = 'block';
    }
    else p.style.display = 'none';
}
</script>

	<div id="center">
	<h2>School of Information</h2>
	<h3>SI 110: Introudction to Information Studies</h3>
		<section>
			<div id="SI110" class ="course">
				<p class="description">Introduction to Information Studies --- This course will provide the foundational knowledge necessary to begin to address the key issues associated with the Information Revolution. Issues will range from the theoretical (what is information and how do humans construct it?), to the cultural (is life on the screen a qualitatively different phenomenon from experiences with earlier distance-shrinking and knowledge-building technologies such as telephones?), to the practical (what are the basic architecture of computing networks?). Successful completion of this "gateway" course.<br>
				<button class = "comButton" onclick="showText('SI110_COM')">Comments...</button>
					<div class="comments" id="SI110_COM">
						<p>THIS CLASS SUCKS SO MUCH</p>
					</div>
				</p>
				<p class="data"></p>
			</div>
		</section>
	<h3>SI 206: Agile Web Development</h3>
		<section>
			<div id="SI206" class ="course">
				<p class="description">Agile Web Development --- Introduction to web programming. Covers HTML, CSS, Javascript, the DOM, and AJAX and an introduction to server-based programming. Also explores the theory and practice of agile software development and continues to explore techniques used in coordinate groups of people working together on software development.<br>
				<button class = "comButton" onclick="showText('SI206_COM')">Comments...</button>
					<div class="comments" id="SI206_COM">
						<p>THIS CLASS SUCKS SO MUCH</p>
					</div>
				</p>
				<p class="data"></p>
			</div>
		</section>
	<h3>SI 339: Design of Complex Websites</h3>
		<section>
			<div id="SI339" class ="course">
				<p class="description">Design of Complex Websites --- This course provides a hands-on approach to building interactive, database-backed websites. Topics covered include HTML, CSS, and Ajax; the Python programming language; the Google Application Engine web development framework; data modeling and database design.<br>
				<button class = "comButton" onclick="showText('SI339_COM')">Comments...</button>
					<div class="comments" id="SI339_COM">
						<p>THIS CLASS SUCKS SO MUCH</p>
					</div>
				</p>
				<p class="data"></p>
			</div>
		</section>
	<h3>SI 363: Busting Myths and Pursuing Information Innovations with Mobile Apps</h3>
		<section>
			<div id="SI363" class ="course">
				<p class="description">Busting Myths and Pursuing Information Innovations with Mobile Apps --- Inspiration for innovation occurs often when people are passionate about changing the world. What are the first steps to take? How do you balance your ideas development as a lead designer in the mobile space? Students will identify and work with target customers, and receive regular feedback from successful innovators.<br>
				<button class = "comButton" onclick="showText('SI363_COM')">Comments...</button>
					<div class="comments" id="SI363_COM">
						<p>THIS CLASS SUCKS SO MUCH</p>
					</div>
				</p>
				<p class="data"></p>
			</div>
		</section>
	<h3>SI 430: Information Technology and Global Society</h3>
		<section>
			<div id="SI430" class ="course">
				<p class="description">Information Technology and Global Society --- In this course, students will examine recent and current global events featuring information technology, and through both discussion and introspection, construct their own personal hypotheses of technology and society. Along the way, students will hear about the way in which information technology is touching the remotest places in the world, gain an introduction to formal theories of technology and society, and stress-test their critical thinking skills.<br>
				<button class = "comButton" onclick="showText('SI430_COM')">Comments...</button>
					<div class="comments" id="SI430_COM">
						<p>THIS CLASS SUCKS SO MUCH</p>
					</div>
				</p>
				<p class="data"></p>
			</div>
		</section>
	</div>
</body>
</html>
