<!DOCTYPE html>
<html>
<head>
<?php
include_once '../../php/includes/session.php'
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Categories</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	$(function(){
		$("#nav").load("nav.html");
});
	</script>
<link rel="stylesheet" href="../../css/view.css " type="text/css">
<link type="text/css" rel="stylesheet" href="../../css/main.css">
<link type="text/css" rel="stylesheet" href="../../css/category.css">
</head>
<body>
	<div id="nav"></div>
		
		<div class="content">
		
			<h1>Categories</h1>
			
			
			<br>
			<hr>
			
		
  
		
		
			<div class="card">
			<a href="sports.html">
				  <div class="container">
				  <form>
					<button type="submit" formaction="add_sport.html">Add Sport</button>
				</form>
				<br>
				<img src = "../../images/sport.png" width="110" height="100">
					<h2><b>Sports</b></h2>
					<p>Number</p>
				
				  </div>
			</a>
			<a href="societies.html">
				  <div class="container">
				   <form>
					<button type="submit" formaction="add_society.html">Add Society</button>
				</form>
				<br>
				<img src = "../../images/society.png" width="110" height="100">
					<h2><b>Society</b></h2>
					<p>Number</p>
				  </div>
			</a>
			<a href="aesthetics.html">
				  <div class="container">
				   <form>
					<button type="submit" formaction="add_aesthetic.html">Add Aesthetic Category</button>
				</form>
				<br>
				<img src = "../../images/aesthetic.png" width="120" height="100">
					<h2><b>Aesthetic</b></h2>
					<p>Number</p>
				  </div>
				</a>
			<a href="educations.html">
				  <div class="container">
				   <form>
					<button type="submit" formaction="add_education.html">Add Education Category</button>
				</form>
				<br>
				<img src = "../../images/education.png" width="110" height="100">
					<h2><b>Education</b></h2>
					<p>Number</p>
				  </div>
				 </a>
			
			  
			</div>
			
		</div>
		
</body>
</html>
