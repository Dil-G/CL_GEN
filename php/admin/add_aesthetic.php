<!DOCTYPE html>
<html>
<head>
<?php
include_once '../../php/includes/session.php'
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Aestheticstcs</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	$(function(){
		$("#nav").load("nav.html");
});
	</script>
<link rel="stylesheet" href="../../css/view.css " type="text/css">
<link type="text/css" rel="stylesheet" href="../../css/main.css">
<link type="text/css" rel="stylesheet" href="../../css/cat_form.css">
</head>
<body>
	<div id="nav"></div>
		
		<div class="content">
		
			
			
		
			<div class="card">
  
			  <div class="container">
				<h2><b>Aesthics A</b></h2>
				
				<form action="../php/register.php" method="POST">
				
				<hr>

				<label for="name"><b>Name</b></label>
				<input type="text" placeholder="Enter Name" name="id" required>
				
				<label for="name"><b>Category</b></label>
				<input type="text" placeholder="Enter Category" name="name" required>

				<label for="nic"><b>Teacher in charge</b></label>
				<input type="text" placeholder="Enter name" name="nic" required>

				<label for="email"><b>Number of students</b></label>
				<input type="text" placeholder="Enter no of students" name="email" required>

				<hr>
			   
				<button type="submit" class="deletebtn">Delete</button>
			</form>
				</div>
				
				
		</div>
		
</body>
</html>
