
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
				<div class="row">
					<div class="col-md-8">
				<p class="description">Designed to introduce students to the major topics studied by 
										psychologists including sensation, perception, learning, motivation, 
										physiological and cultural bases of behavior, development, personality, 
										and social psychology.</p><br>
					</div>
					<div class="col-md-4">
						<p class="data">Overall Rating: 4.5/5 | Course Difficulty: 3.9/5 | Average Grade: A-</p>
					</div>
				</div>
				<div class="text-left">
					<button class = "btn btn-default" onclick="showText('PSYCH_COM')">Comments...</button>
				</div>
					<table class="comments" id="PSYCH_COM">
						<tr>
							<td>THIS CLASS SUCKS SO MUCH. I did not like it one bit. Let me tell you.</td>
							<td class="userInfo">Psych Major, 2015 | 12/13/14</td>
						</tr>
						<tr>
							<td>I actually kind of liked this class</td>
							<td class="userInfo">STATS Major, 2016 | 1/7/15</td>
						</tr>
						<tr>
							<td>Really liked this class. I reccommend you take it with Perlmutter. 
								Easy intro class and helps you figure out early if psychology is the path 
								for you.</td>
							<td class = "userInfo">Psych Major, 2017 | 2/6/15</td>
						</tr>
					</table>
			</div>
		</section>
	<h3>STATS 250: Introduction to Statistics and Data Analysis</h3>
		<section>
			<div id="STATS" class ="course">
				<div class="row">
						<div class="col-md-8">
				<p class="description">In this course students are introduced to the concepts and 
										applications of statistical methods and data analysis. Examples 
										of applications are drawn from virtually all academic areas and 
										some attention is given to statistical process control methods.<br></p>
					</div>
					<div class="col-md-4">
						<p class="data">Overall Rating: 4.1/5 | Course Difficulty: 3.4/5 | Average Grade: B+</p>
					</div>
				</div>
				<div class="text-left">
					<button class = "btn btn-default" onclick="showText('STATS_COM')">Comments...</button>
				</div>
					<table class="comments" id="STATS_COM">
						<tr>
							<td>I found this class to be super easy. I took some stats in high school and it was a 
								breeze. Never need to go to class and all the lectures are online..</td>
							<td class="userInfo">Ross Business School, 2015 | 12/6/13</td>
						</tr>
						<tr>
							<td>Great intro course for stats. I’m currently taking my third stats course at Michigan 
								and this class is by far the easiest, but is a great introduction. Go to class. You 
								will learn better that way.</td>
							<td class="userInfo">STATS Major, 2016 | 1/24/14</td>
						</tr>
						<tr>
							<td>If you don’t have Gunderson, don’t go to class! Everything is online.</td>
							<td class = "userInfo">Psych Major, 2017 | 3/24/15</td>
						</tr>
					</table>
			</div>
		</section>
	<h3>Math 115: Calculus I</h3>
		<section>
			<div id="Calc" class ="course">
				<div class="row">
					<div class="col-md-8">
				<p class="description">The course presents the concepts of calculus from three points of 
										view: geometric (graphs); numerical (tables); and algebraic (formulas). 
										Students will develop their reading, writing and questioning skills. 
										Topics include functions and graphs, derivatives and their applications 
										to real-life problems in various fields, and definite integrals. The 
										classroom atmosphere is interactive and cooperative and homework is done 
										in groups.<br></p>
					</div>
					<div class="col-md-4">
						<p class="data">Overall Rating: 3.2 | Course Difficulty: 4.1/5 | Average Grade: B</p>
					</div>
				</div>
				<div class="text-left">
					<button class = "btn btn-default" onclick="showText('CALC_COM')">Comments...</button>
				</div>
					<table class="comments" id="CALC_COM">
						<tr>
							<td>If you took calc in high school and placed out, do not take this class! It is 
								much harder in college.</td>
							<td class="userInfo">Econ, 2015 | 3/23/12</td>
						</tr>
						<tr>
							<td>The material is generally easy to grasp, but the exams are much harder than they 
								need to be. Also really didn’t like the GSI’s.</td>
							<td class="userInfo">Informatics, 2016 | 1/27/13</td>
						</tr>
						<tr>
							<td>Math is my thing and this class was really easy for me. Had the textbook, but barely 
								used it. Group assignments were annoying, but really not that bad.</td>
							<td class = "userInfo">Psych Major, 2017 | 10/15/14</td>
						</tr>
					</table>
			</div>
		</section>
	<h3>Spanish 277: Reading, Grammar, and Composition</h3>
		<section>
			<div id="Spanish" class ="course">
				<div class="row">
					<div class="col-md-8">
				<p class="description">This course will meet three hours a week, with one additional hour of 
										individual study on-line. The course will focus on reading short stories 
										in Spanish and learning to write analytic essays. However, the grammatical 
										content will be taught in an on-line format, with points of grammar linked 
										to materials taught and discussed in class.<br></p>
					</div>
					<div class="col-md-4">
						<p class="data">Overall rating: 3.3 | Course Difficulty: 4.3/5 | Average Grade: B</p>
					</div>
				</div>
				<div class="text-left">
					<button class = "btn btn-default" onclick="showText('SPAN_COM')">Comments...</button>
				</div>
					<table class="comments" id="SPAN_COM">
						<tr>
							<td>I placed out of Spanish coming to Michigan and thought I would just continue 
								taking the language. Huge mistake! This class was super difficult. I had to speak 
								spanish the whole class and didn’t understand what was going on the whole time. 
								Grading isn’t too bad, but I struggled.</td>
							<td class="userInfo">ORG Studies, 2014 | 9/3/12</td>
						</tr>
						<tr>
							<td>Loved this class! Super easy and the material we read was actually interesting. 
								My professor was great and the class discussion was always enjoyable!</td>
							<td class="userInfo">Spanish Major, 2014 | 2/5/13</td>
						</tr>
						<tr>
							<td>Not a terribly difficult class, but certainly not easy. I found myself reading 
								spanish passages over and over again. If you are really good at Spanish then this 
								class should be fine for you.</td>
							<td class = "userInfo">Psych Major, 2017 | 11/21/14</td>
						</tr>
					</table>
			</div>
		</section>
		<h3>Screen Arts and Culture (SAC) 236: The Art of Film</h3>
		<section>
			<div id="Film" class ="course">
				<div class="row">
					<div class="col-md-8">
				<p class="description">This course examines the dramatic and psychological effects of the elements 
										and techniques used in film making and television, and some of the salient 
										developments in film's artistic and technological history. This course 
										provides students with the basic tools and methods for film appreciation 
										and study.<br></p>
					</div>
					<div class="col-md-4">
						<p class="data">Overall Rating: 4.2 | Course Difficulty: 3.4/5 | Average Grade B+</p>
					</div>
				</div>
				<div class="text-left">
					<button class = "btn btn-default" onclick="showText('SAC_COM')">Comments...</button>
				</div>
					<table class="comments" id="SAC_COM">
						<tr>
							<td>Great class. Super easy. A bunch of short writing assignments. And tons of watching 
								movies!!</td>
							<td class="userInfo">Ross Business School, 2016 | 10/11/13</td>
						</tr>
						<tr>
							<td>Thought this class would be easy and interesting, but I hated the director that we 
								focused on, and my class was curved to a B! Had no idea until I got my first 
								assignment back.</td>
							<td class="userInfo">Sociology Major, 2016 | 1/4/14</td>
						</tr>
						<tr>
							<td>Great intro to film class. Teaches you a lot about the fundamentals of movies and 
								makes you look at all films differently forever. Grading really depends on your GSI 
								though.</td>
							<td class = "userInfo">Psych Major, 2016 | 4/7/14</td>
						</tr>
					</table>
			</div>
		</section>
	</div>
	<?php
		include("footer.php");
	?>
</body>
</html>
