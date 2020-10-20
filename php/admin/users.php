<!DOCTYPE html>
<html>
<head>
<?php
include_once '../../php/includes/session.php'
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Users</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	$(function(){
		$("#nav").load("nav.html");
});
	</script>
<link rel="stylesheet" href="../../css/view.css " type="text/css">
<link type="text/css" rel="stylesheet" href="../../css/main.css">
<link type="text/css" rel="stylesheet" href="../../css/users.css">
</head>
<body>
	<div id="nav"></div>
		
		<div class="content">
		
		<h1>USERS</h1>
			
			
			<br>
			<hr>
		
			<div class="card">
			
				  <a href="student.html">
				  <div class="container">
				  <form>
					<button type="submit" formaction="register_stu.html">Add Student</button>
				</form>
				<br>
				<img src = "../../images/student.png" width="110" height="100">
					<h2><b>Students</b></h2>
				
					<p>Number</p>
					</a>
				
				  </div>
			<a href="teachers.html">
				  <div class="container">
				   <form>
					<button type="submit" formaction="register_teacher.html">Add Teachers</button>
				</form>
				<br>
				<img src = "../../images/teacher.png" width="110" height="100">
					<h2><b>Teachers</b></h2>
				
					<p>Number</p>
				  </div>
				  </a>
			<a href="staff.html">
				  <div class="container">
				   <form>
					<button type="submit" formaction="register_staff.html">Add Office Staff</button>
				</form>
				<br>
				<img src = "../../images/office.png" width="110" height="100">
					<h2><b>Office Staff</b></h2>
				
					<p>Number</p>
				  </div>
				  </a>
				 
			
			  
			</div>
			
		</div>
</body>
		
</html>