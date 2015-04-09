
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
	<h2>College of Literature Science and Arts</h2>
	<h3>Psych 111: Introduction to Psychology</h3>
		<section>
			<div id="Psych" class ="course">
				<p class="description">Designed to introduce students to the major topics studied by psychologists including sensation, perception, learning, motivation, physiological and cultural bases of behavior, development, personality, and social psychology.<br>
				<button class = "comButton" onclick="showText('PSYCH_COM')">Comments...</button>
					<table class="comments" id="PSYCH_COM">
						<tr>
							<td>THIS CLASS SUCKS SO MUCH. I did not like it one bit. Let me tell you</td>
							<td class="userInfo">Psych Major, 2015 | 12/13/14</td>
						</tr>
						<tr>
							<td>I actually kind of liked this class</td>
							<td class="userInfo">STATS Major, 2016 | 1/7/15</td>
						</tr>
						<tr>
							<td>Really liked this class. I reccommend you take it with Perlmutter. Easy intro class and helps you figure out early if psychology is the path for you.</td>
							<td class = "userInfo">Psych Major, 2017 | 2/6/15</td>
						</tr>
					</table>
				</p>
				<p class="data">Overall Rating: 4.5/5 | Course Difficulty: 3.9/5 | Average Grade: A-</p>
			</div>
		</section>
	<h3>STATS 250: Introduction to Statistics and Data Analysis</h3>
		<section>
			<div id="STATS" class ="course">
				<p class="description">In this course students are introduced to the concepts and applications of statistical methods and data analysis. Examples of applications are drawn from virtually all academic areas and some attention is given to statistical process control methods.<br>
				<button class = "comButton" onclick="showText('STATS_COM')">Comments...</button>
					<div class="comments" id="STATS_COM">
						<p>THIS CLASS SUCKS SO MUCH</p>
					</div>
				</p>
				<p class="data"></p>
			</div>
		</section>
	<h3>Math 115: Calculus I</h3>
		<section>
			<div id="Calc" class ="course">
				<p class="description">The course presents the concepts of calculus from three points of view: geometric (graphs); numerical (tables); and algebraic (formulas). Students will develop their reading, writing and questioning skills. Topics include functions and graphs, derivatives and their applications to real-life problems in various fields, and definite integrals. The classroom atmosphere is interactive and cooperative and homework is done in groups.<br>
				<button class = "comButton" onclick="showText('CALC_COM')">Comments...</button>
					<div class="comments" id="CALC_COM">
						<p>THIS CLASS SUCKS SO MUCH</p>
					</div>
				</p>
				<p class="data"></p>
			</div>
		</section>
	<h3>Spanish 277: Reading, Grammar, and Composition</h3>
		<section>
			<div id="Spanish" class ="course">
				<p class="description">This course will meet three hours a week, with one additional hour of individual study on-line. The course will focus on reading short stories in Spanish and learning to write analytic essays. However, the grammatical content will be taught in an on-line format, with points of grammar linked to materials taught and discussed in class.<br>
				<button class = "comButton" onclick="showText('SPAN_COM')">Comments...</button>
					<div class="comments" id="SPAN_COM">
						<p>THIS CLASS SUCKS SO MUCH</p>
					</div>
				</p>
				<p class="data"></p>
			</div>
		</section>
	<h3>Screen Arts and Culture (SAC) 236: The Art of Film</h3>
		<section>
			<div id="Film" class ="course">
				<p class="description">This course examines the dramatic and psychological effects of the elements and techniques used in film making and television, and some of the salient developments in film's artistic and technological history. This course provides students with the basic tools and methods for film appreciation and study.<br>
				<button class = "comButton" onclick="showText('SAC_COM')">Comments...</button>
					<div class="comments" id="SAC_COM">
						<p>THIS CLASS SUCKS SO MUCH</p>
					</div>
				</p>
				<p class="data"></p>
			</div>
		</section>
	</div>
</body>
</html>
