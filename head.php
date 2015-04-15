<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="http://ginchai.people.si.umich.edu/css/default.css"> 
	<link rel="stylesheet" href="http://ginchai.people.si.umich.edu/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/4.2.1/bootstrap-social.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Average' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="header_style.css">
	<link rel="stylesheet" href="footer_style.css">
	<link rel="stylesheet" href="core_page_style.css">
	<link rel="stylesheet" href="gotit_style.css">
	<title>
		<?php
			if ($fName == "index.php")
			{
				echo "Home";
			}
			elseif ($fName == "EngineeringPage.php") 
			{
				echo "Engineering Classes";
			}
			elseif ($fName == "LSAPage.php")
			{
				echo "LSA Classes";
			}
			elseif ($fName == "SchoolofInfoPage.php") 
			{
				echo "SI Classes";
			}
			else
			{
				echo "Submit a Review";
			}
		?>
	</title>
</head>