
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
					<table class="comments" id="SI110_COM">
						<tr>
							<td>Loved this class!! So interesting and relevant. Professor and GSI’s were great!</td>
							<td class="userInfo">Psych Major, 2016 | 4/12/14</td>
						</tr>
						<tr>
							<td>This was one of the only classes I’ve taken so far that I’ve wanted to do the readings and learn. What you learn is so applicable!</td>
							<td class="userInfo">STATS Major, 2016 | 9/3/14</td>
						</tr>
						<tr>
							<td>Such an easy class. Do all the extra credit.</td>
							<td class = "userInfo">School of Information, 2017 | 1/6/15</td>
						</tr>
					</table>
				</p>
				<p class="data">Overall Rating: 4.6/5 | Course Difficulty: 2.8/5 | Average Grade: A
</p>
			</div>
		</section>
	<h3>SI 206: Agile Web Development</h3>
		<section>
			<div id="SI206" class ="course">
				<p class="description">Agile Web Development --- Introduction to web programming. Covers HTML, CSS, Javascript, the DOM, and AJAX and an introduction to server-based programming. Also explores the theory and practice of agile software development and continues to explore techniques used in coordinate groups of people working together on software development.<br>
				<button class = "comButton" onclick="showText('SI206_COM')">Comments...</button>
					<table class="comments" id="SI206_COM">
						<tr>
							<td>Great intro class for web design. You make so many cool web pages and end up with a great portfolio.</td>
							<td class="userInfo">School of Information, 2016 | 9/4/14</td>
						</tr>
						<tr>
							<td>You must take it with Colleen! She is the best and you will love the class.</td>
							<td class="userInfo">EECS Major, 2015 | 3/14/15</td>
						</tr>
					</table>
				</p>
				<p class="data">Overall Rating: 4.8/5 | Course Difficulty: 3.3/5 | Average Grade: A-</p>
			</div>
		</section>
	<h3>SI 339: Design of Complex Websites</h3>
		<section>
			<div id="SI339" class ="course">
				<p class="description">Design of Complex Websites --- This course provides a hands-on approach to building interactive, database-backed websites. Topics covered include HTML, CSS, and Ajax; the Python programming language; the Google Application Engine web development framework; data modeling and database design.<br>
				<button class = "comButton" onclick="showText('SI339_COM')">Comments...</button>
					<table class="comments" id="SI339_COM">
						<tr>
							<td>Perfect follow up class to SI 206. Another one of Colleen’s courses so you know it’ll be great!</td>
							<td class="userInfo">EECS Major, 2015 | 8/30/14</td>
						</tr>
						<tr>
							<td>This class gets difficult at times, so make sure you really know all the various languages before taking it.</td>
							<td class="userInfo">School of Information, 2016 | 1/9/15</td>
						</tr>
						<tr>
							<td>Thought 339 was awesome. Employers also love to see your coding ability for web design. </td>
							<td class = "userInfo">School of Information, 2016 | 3/6/15</td>
						</tr>
					</table>
				</p>
				<p class="data">Overall Rating: 4.6/5 | Course Difficulty: 3.8/5 | Average Grade: A-</p>
			</div>
		</section>
	<h3>SI 363: Busting Myths and Pursuing Information Innovations with Mobile Apps</h3>
		<section>
			<div id="SI363" class ="course">
				<p class="description">Busting Myths and Pursuing Information Innovations with Mobile Apps --- Inspiration for innovation occurs often when people are passionate about changing the world. What are the first steps to take? How do you balance your ideas development as a lead designer in the mobile space? Students will identify and work with target customers, and receive regular feedback from successful innovators.<br>
				<button class = "comButton" onclick="showText('SI363_COM')">Comments...</button>
					<table class="comments" id="SI363_COM">
						<tr>
							<td>This is not just another coding class. You apply all of your previous coding into APP design. It gets tough at times, but so worth it.</td>
							<td class="userInfo">School of Information, 2015 | 1/12/15</td>
						</tr>
						<tr>
							<td>You need to do some learning on your own before taking 363. You will fall behind quick if not. Other than that, great course.</td>
							<td class="userInfo">School of Information, 2016 | 1/22/15</td>
						</tr>
					</table>
				</p>
				<p class="data">Overall Rating: 4.2/5 | Course Difficulty: 3.6/5 | Average Grade: A-</p>
			</div>
		</section>
	<h3>SI 430: Information Technology and Global Society</h3>
		<section>
			<div id="SI430" class ="course">
				<p class="description">Information Technology and Global Society --- In this course, students will examine recent and current global events featuring information technology, and through both discussion and introspection, construct their own personal hypotheses of technology and society. Along the way, students will hear about the way in which information technology is touching the remotest places in the world, gain an introduction to formal theories of technology and society, and stress-test their critical thinking skills.<br>
				<button class = "comButton" onclick="showText('SI430_COM')">Comments...</button>
					<table class="comments" id="SI430_COM">
						<tr>
							<td>After taking this course, I had such a better perspective on the effects technology and social media has on contemporary culture. Highly recommend it.</td>
							<td class="userInfo">School of Information, 2016 | 12/8/14</td>
						</tr>
						<tr>
							<td>In all the internships I have had relating to the digital media, I always refer back to this class. Loved the way it was taught, and the workload was not bad at all. </td>
							<td class="userInfo">School of Information, 2016 | 3/26/15</td>
						</tr>
					</table>
				</p>
				<p class="data">Overall Rating: 4.6/5 | Course Difficulty: 3.4/5 | Average Grade: B+</p>
			</div>
		</section>
	</div>
</body>
</html>
