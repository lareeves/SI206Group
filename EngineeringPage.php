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
    if(p.style.display == 'none') {
    	p.style.display = 'block';
    }
    else p.style.display = 'none';
}
</script>

	<div id="center">
	<h2>College of Engineering</h2>
	<h3>EECS 280: Programming and Introductory Data Structures</h3>
		<section>
			<div id="EECS280" class ="course">
				<p class="description">Techniques and algorithm development and effective programming, top-down analysis, structured programming, testing and program correctness. Program language syntax and static and runtime semantics. Scope, procedure instantiation, recursion, abstract data types and parameter passing methods. Structured data types, pointers, linked data structures, stacks, queues, arrays, records and trees.<br>
				<button class = "comButton" onclick="showText('280_COM')">Comments...</button>
					<div class="comments" id="280_COM">
						<p>THIS CLASS SUCKS SO MUCH</p>
					</div>
				</p>
				<p class="data"></p>
			</div>
		</section>
	<h3>EECS 281: Data Structures and Algorithms</h3>
		<section>
			<div id="EECS281" class ="course">
				<p class="description">Introduction to algorithm analysis and O-notation; Fundamental data structures including lists, stacks, queues, priority queues, hash tables, binary trees, search trees, balanced trees and graphs; searching and sorting algorithms; recursive algorithms; basic graph algorithms; introduction to greedy algorithms and divide and conquer strategy. Several programming assignments.<br>
				<button class = "comButton" onclick="showText('281_COM')">Comments...</button>
					<div class="comments" id="281_COM">
						<p>THIS CLASS SUCKS SO MUCH</p>
					</div>
				</p>
				<p class="data"></p>
			</div>
		</section>
	<h3>EECS 285: A Programming Language or Computer System</h3>
		<section>
			<div id="EECS285" class ="course">
				<p class="description">A course covering a complex computer system or programming language. Programming problems will be assigned. Specific languages or systems to be offered will be announced in advance.<br>
				<button class = "comButton" onclick="showText('285_COM')">Comments...</button>
					<div class="comments" id="285_COM">
						<p>THIS CLASS SUCKS SO MUCH</p>
					</div>
				</p>
				<p class="data"></p>
			</div>
		</section>
	<h3>EECS 485</h3>
		<section>
			<div id="EECS485" class ="course">
				<p class="description">Concepts surrounding Web information systems, including client/server systems, security, XML, information retrieval and search engines and data replication issues. Includes substantial final project involving development of a database-backed web site.<br>
				<button class = "comButton" onclick="showText('485_COM')">Comments...</button>
					<div class="comments" id="485_COM">
						<p>THIS CLASS SUCKS SO MUCH</p>
					</div>
				</p>
				<p class="data"></p>
			</div>
		</section>
	<h3>EECS 493</h3>
		<section>
			<div id="EECS493" class ="course">
				<p class="description">Concepts and techniques for designing computer system user interfaces to be easy to learn and use, with an introduction to their implementation. Task analysis, design of functionality, display and interaction design, and usability evaluation. Interface programming using an object-oriented application framework. Fluency in a standard object-oriented programming language is assumed.<br>
				<button class = "comButton" onclick="showText('493_COM')">Comments...</button>
					<div class="comments" id="493_COM">
						<p>THIS CLASS SUCKS SO MUCH</p>
					</div>
				</p>
				<p class="data"></p>
			</div>
		</section>
	</div>
</body>
</html>
