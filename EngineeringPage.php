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
	<section>
	<h2>College of Engineering</h2>
		<h3>EECS 280: Programming and Introductory Data Structures</h3>
		<section>
			<div id="EECS280" class ="course">
				<div class="row">
					<div class="col-md-8">
				<p class="description">Techniques and algorithm development and effective programming, top-down analysis, structured programming, testing and program correctness. Program language syntax and static and runtime semantics. Scope, procedure instantiation, recursion, abstract data types and parameter passing methods. Structured data types, pointers, linked data structures, stacks, queues, arrays, records and trees.<br></div>
					<div class ="col-md-4">
					<p class="data">Overall Rating: 3.9/5 | Course Difficulty: 4/5 | Average Grade: B</p>
				</div>
			</div>
				<div class="text-left">
					<button class = "btn btn-default" onclick="showText('280_COM')">Comments...</button>
				</div>
					<table class="comments" id="280_COM">
						<tr>
							<td>In 280 I thought the the projects were difficult and took a lot of time, but overall I got good grades on them. I did very poorly on the tests though and as a result got a low grade in the class.</td>
							<td class="userInfo">EECS Major, 2014 | 10/13/13</td>
						</tr>
						<tr>
							<td>I think 280 is easier if you take/have taken EECS 183 before rather than Engr101</td>
							<td class="userInfo">Math Major, 2015 | 4/3/13</td>
						</tr>
						<tr>
							<td>The difficulty of 280 is really overstated. I was a very inexperienced programmer going into the class and still managed a B pretty easily. If you put a decent amount of time into it and start the projects early, there's really nothing holding you back from getting at least a B.</td>
							<td class = "userInfo">EECS Major, 2017 | 3/1/15</td>
						</tr>
					</table>
				</p>
			</div>
		</section>
	<h3>EECS 281: Data Structures and Algorithms</h3>
		<section>
			<div id="EECS281" class ="course">
				<div class="row">
					<div class="col-md-8">
				<p class="description">Introduction to algorithm analysis and O-notation; Fundamental data structures including lists, stacks, queues, priority queues, hash tables, binary trees, search trees, balanced trees and graphs; searching and sorting algorithms; recursive algorithms; basic graph algorithms; introduction to greedy algorithms and divide and conquer strategy. Several programming assignments.<br></div>
				<div class ="col-md-4">
					<p class="data">Overall Rating: 3.5/5 | Course Difficulty: 4.7/5 | Average Grade: B-</p></div>
				</div>
				<div class="text-left">
					<button class = "btn btn-default" onclick="showText('281_COM')">Comments...</button>
				</div>
					<table class="comments" id="281_COM">
						<tr>
							<td>That class was 100 times worse than 280 and was my hardest/favorite class that I've taken at Michigan</td>
							<td class="userInfo">EECS Major, 2015 | 9/22/13</td>
						</tr>
						<tr>
							<td>In 281 I couldn't do the projects well. I didn't use the autograder like I should have, but generally the feedback was pretty useless except the grade itself. I also went in thinking it would be like 203 and 280, but it has almost nothing to do with 203</td>
							<td class="userInfo">EECS Major, 2016 | 1/9/14</td>
						</tr>
						<tr>
							<td>281 is much less about programming and much more about understanding some fundamental theoretical ideas. The programming is just about applying these ideas, and it's not that bad nowadays. The projects were pretty easy to do well on. I felt that the tests were way more difficult.</td>
							<td class = "userInfo">EECS Major, 2016 | 4/14/14</td>
						</tr>
					</table>
				</p>
			</div>
		</section>
	<h3>EECS 285: A Programming Language or Computer System</h3>
		<section>
			<div id="EECS285" class ="course">
				<div class="row">
					<div class="col-md-8">
				<p class="description">A course covering a complex computer system or programming language. Programming problems will be assigned. Specific languages or systems to be offered will be announced in advance.<br>
					</div>
					<div>
						<p class="data">Overall Rating: 4.2/5 | Course Difficulty: 3.5/5 | Average Grade: A</p></div></div>
				<div class="text-left">
					<button class = "btn btn-default" onclick="showText('285_COM')">Comments...</button>
				</div>
					<table class="comments" id="285_COM">
						<tr>
							<td>I did not care for EECS 285. I would recommend against taking it.</td>
							<td class="userInfo">Math Major, 2016 | 5/13/14</td>
						</tr>
						<tr>
							<td>285 was easily one of my favorite classes.</td>
							<td class="userInfo">EECS Major, 2016 | 12/21/14</td>
						</tr>
						<tr>
							<td>Prof Morgan provides good lecture slides, but the project specs are broad, yet his expectations are very specific. You need a programming background- the projects are time-consuming</td>
							<td class = "userInfo">EECS Major, 2017 | 3/6/15</td>
						</tr>
					</table>
				</p>
			</div>
		</section>
	<h3>EECS 485</h3>
		<section>
			<div id="EECS485" class ="course">
					<div class="row">
						<div class="col-md-8">
				<p class="description">Concepts surrounding Web information systems, including client/server systems, security, XML, information retrieval and search engines and data replication issues. Includes substantial final project involving development of a database-backed web site.<br>
				</div>
				<div class ="col-md-4">
					<p class="data">Overall Rating: 4.4/5 | Course Difficulty: 3.2/5 | Average Grade: B+</p></div></div>
				<div class="text-left">
					<button class = "btn btn-default" onclick="showText('485_COM')">Comments...</button>
				</div>
					<table class="comments" id="485_COM">
						<tr>
							<td>485 teaches you how to make websites. You'll get practice in Javascript, HTML, CSS, a server architecture of your choice (My group did Flask, another did Node.js, you can pick pretty much anything you want), and you'll also get to try a little bit of Hadoop near the end of the semester</td>
							<td class="userInfo">EECS Major, 2015 | 10/13/14</td>
						</tr>
						<tr>
							<td>part of what made 485 so good for me was that Mike Cafarella taught it, and he was phenomenal. If you can wait until he's teaching it again, I recommend it.</td>
							<td class="userInfo">EECS Major, 2016 | 11/18/14</td>
						</tr>
					</table>
				</p>
				
			</div>
		</section>
	<h3>EECS 493</h3>
		<section>
			<div id="EECS493" class ="course">
				<div class ="row">
					<div class="col-md-8">
				<p class="description">Concepts and techniques for designing computer system user interfaces to be easy to learn and use, with an introduction to their implementation. Task analysis, design of functionality, display and interaction design, and usability evaluation. Interface programming using an object-oriented application framework. Fluency in a standard object-oriented programming language is assumed.<br>
				</div>
				<div class="col-md-4">
					<p class="data">Overall Rating: 4.6/5 | Course Difficulty: 3.4/5 | Average Grade: B+</p>
				</div>
			</div>
				<div class="text-left">
					<button class = "btn btn-default" onclick="showText('493_COM')">Comments...</button>
				</div>
					<table class="comments" id="493_COM">
						<tr>
							<td>I was really looking forward to this course, and it was fine for the first half. I didn't learn a single thing the second half of the course. In fact, the review sheet for the final was the same as the review sheet for the midterm plus two or three additional things.</td>
							<td class="userInfo">EECS Major, 2014 | 10/13/13</td>
						</tr>
						<tr>
							<td>love this course, very straight forward.  Team project at the end can be a little overwhelming though.</td>
							<td class="userInfo">EECS Major, 2016 | 2/3/15</td>
						</tr>
					</table>
				</p>
				
			</div>
		</section>
	</div>
</section>
	<?php
		include("footer.php");
	?>
</body>
</html>
