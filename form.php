<!-- ****VIKRAM**** -->

<?php 
// form needs to be responsive
// form needs to be styled
 ?>

<?php 
$fName = basename(__FILE__);
include("head.php");



 ?>


<body>
	<script type="text/javascript">
	function validateForm(form){
		alert("rin");
		var emailCheck = form.email;
		var nameCheck = form.name;


		if (document.forms.submission["firstname"].value.length == 0 || document.forms.submission["lastname"].value.length == 0 || document.forms.submission["major"].value.length == 0 || document.forms.submission["year"].value.length == 0 || document.forms.submission["course"].value.length ==0){
			alert("You must fill out all fields");
			return false;
		}
    	var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
		if (document.forms.submission["email"].value == '' || !re.test(document.forms.submission["email"].value))
		{
    		alert('Please enter a valid email address.');
    		return false;
		}
		else{
			if (document.forms.submission["firstname"].value.match("[a-zA-Z]") == true && document.forms.submission["lastname"].value.match("[a-zA-Z]") == true){
				return true;
			}
			else{
				return false;
			}
		}
	} 
</script>
	<?php 
	include("header.php"); ?>

	<div class="container-fluid">
		<h1>Submit your Review </h1>
		<div> 
			<form  action= "gotIt.php" method="POST" name="submission" id="getform" onsubmit="validateForm(this);">
				<div class="row">
					<div class="col-sm-6 col-lg-6">
						<div class="form-group">
							<label>First Name</label><br>
							<input type="text" name="firstname" > <br>
						</div>
					</div>
					<div class="col-sm-6 col-lg-6">
						<div class="form-group">
							<label>Last Name</label><br>
							<input type="text" name="lastname"> <br>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-lg-6">
					<div class="form-group">
					<label>Graduation Year</label><br>
					<input type="text"> <br>
				</div>
			</div>
	</div>
	<div class="row">
		<div class="col-sm-6 col-lg-6">
			<div class="form-group">
				<label>Your Email:</label><br>
				<input type="email" name="email"><br>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 col-lg-6">
			<div class="form-group">
				<label>Major</label><br>
				<!-- autocomplete for professor name -->
				<input type="text" name="major"><br>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 col-lg-6">
			<div class="form-group">
				<label>Course:</label><br>
				<input type="text" name="coursename">
			</div>
		</div>
		<div class="col-sm-6 col-lg-6">
			<div class="form-group">
				<label>Overall Rating:</label><br>
				<select name="orating" id="orating">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
			</div>
		</div>
	</div>
		

	<div class="row">
		<div class="col-sm-6 col-lg-6">
			<div class="form-group">
				<br><label>Course Difficulty:</label><br>
				<select name="drating" id="drating">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select><br>
			</div>
		</div>
		<div class="col-sm-6 col-lg-6">
			<div class="form-group">
				<label>Grade Received/Expected</label><br>
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
			</div>
		</div>
	</div>
	<div class="form-group">
		<label for="feedback">Write your review:</label><br>
		<textarea name="feedback" id="feedback" cols="30" rows="10"></textarea>
	</div>
	<input type="submit" value= "Submit" class="btn btn-default" onclick="return validateForm(this);">
	</form>
	</div>
	</div>




<?php include("footer.php"); ?>
</body>

</html>
