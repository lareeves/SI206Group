
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
    if(p.style.display ='none') {
    	p.style.display ='block';
    	return;
    }
    else{
<<<<<<< Updated upstream
=======
    	//alert(p);
>>>>>>> Stashed changes
    	if(p.style.visibility ='visible')
    	p.style.display='none';
    	return;
    }
}
</script>
	<div id="center">
	<h2>College of Literature Science and Arts</h2>
	<h3>Psych 111: Introduction to Psychology</h3>
		<section>
			<div id="Psych" class ="course">
				<p class="description">Designed to introduce students to the major topics studied by psychologists including sensation, perception, learning, motivation, physiological and cultural bases of behavior, development, personality, and social psychology.</p>
				<p class="data"></p>
				<div id="com_header" onclick="showText('comments1')">Comments...
					<p class="comments" id="comments1">THIS CLASS SUCKS SO MUCH</p>
				</div>
			</div>
		</section>
	<h3>STATS 250: Introduction to Statistics and Data Analysis</h3>
		<section>
			<div id="STATS" class ="course">
				<p class="description">In this course students are introduced to the concepts and applications of statistical methods and data analysis. Examples of applications are drawn from virtually all academic areas and some attention is given to statistical process control methods.</p>
				<p class="data"></p>
				<p class="comments"></p>
			</div>
		</section>
	<h3>Math 115: Calculus I</h3>
		<section>
			<div id="Calc" class ="course">
				<p class="description">The course presents the concepts of calculus from three points of view: geometric (graphs); numerical (tables); and algebraic (formulas). Students will develop their reading, writing and questioning skills. Topics include functions and graphs, derivatives and their applications to real-life problems in various fields, and definite integrals. The classroom atmosphere is interactive and cooperative and homework is done in groups.</p>
				<p class="data"></p>
				<p class="comments"></p>
			</div>
		</section>
	<h3>Spanish 277: Reading, Grammar, and Composition</h3>
		<section>
			<div id="Spanish" class ="course">
				<p class="description">This course will meet three hours a week, with one additional hour of individual study on-line. The course will focus on reading short stories in Spanish and learning to write analytic essays. However, the grammatical content will be taught in an on-line format, with points of grammar linked to materials taught and discussed in class.</p>
				<p class="data"></p>
				<p class="comments"></p>
			</div>
		</section>
	<h3>Screen Arts and Culture (SAC) 236: The Art of Film</h3>
		<section>
			<div id="Film" class ="course">
				<p class="description">This course examines the dramatic and psychological effects of the elements and techniques used in film making and television, and some of the salient developments in film's artistic and technological history. This course provides students with the basic tools and methods for film appreciation and study.</p>
				<p class="data"></p>
				<p class="comments"></p>
			</div>
		</section>
	</div>
</body>
</html>
