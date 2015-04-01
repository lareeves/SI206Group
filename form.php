<script type="text/javascript">
	function validateForm(form){
		var emailCheck = form.email;
		var nameCheck = form.name;
    	var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
		if (email.val() == '' || !re.test(email.val()))
		{
    		alert('Please enter a valid email address.');
    		return false;
		}
		else{
			if (nameCheck.match("[a-zA-Z]") == true){
				return true;
			}
			else{
				return false;
			}
		}
	} 
</script>

<form action="POST"> 
	<!-- Must add bootstrap styling -->
	<label for="firstname">First Name</label>
	<input type="text" name: "firstname"> <br>
	<label for="last name">Last Name</label>
	<input type="text" name:"lastname"> <br>
	<label for="year">Year</label>
	<input type="number"> <br>
	<label for="email">Email:</label>
	<input type="email" name:"email"><br>
	<label for="profname">Professor Name</label>
	<input type="text" name:"profname"><br>
	<label for="coursename">Course:</label>
	<select name="coursename" id="">
		<option value="course1">Course 1</option>
		<option value="course2">Course 2</option>
		<option value="course3">Course 3</option>
	</select><br>
	<label>Overall Rating:</label>
	<select name="orating" id="orating">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
	</select>
	<br><label for="drating">Course Difficulty:</label>
	<select name="drating" id="drating">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
	</select><br>
	<label for="irating">Your Interest:</label>
	<select name="irating" id="irating">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
	</select><br>
	<label for="grade">Grade Received/Expected</label>
	<select name="grade" id="grade_id">
		<option value="A">A</option>
		<option value="Aminus">A-</option>
		<option value="Bplus">B+</option>
		<option value="B">B</option>
		<option value="Bminus">B-</option>
		<option value="Cplus">C+</option>
		<option value="C">C</option>
		<option value="Cminus">C-</option>
		<option value="Dplus">D+</option>
		<option value="D">D</option>
		<option value="Dminus">D-</option>
		<option value="E">E</option>
		<option value="dropped">Dropped Course</option>
	</select><br>
	<label for="feedback">Write your review:</label><br>
	<textarea name="feedback" id="" cols="30" rows="10"></textarea>
	<input type="submit" value= "Submit">
</form onsubmit="return validateForm(this);">
