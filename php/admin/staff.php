<!DOCTYPE html>
<html>
<head>
<?php
include_once '../../php/includes/session.php'
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Office staff User List</title>
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
		
		<h1>Office Staff User List</h1>
		<form class="search" action="register_stu.html">
		<input type="text" placeholder="Search.." name="search">
		<button type="submit">Search</button>
		</form>
		
		
		<br>
		<br>
		<br>
		

			
			  <div class="card">
			  <form>
					<button type="submit" formaction="register_stu.html">Add Office Staff</button>
				</form>
				<br>
				<br>
				
				<hr>
				<table>
					<tr>
						<th>Teacher number</th>
						<th>Student name</th>
						<th>Click to edit</th>
						
					</tr>
					<tr>
						<td>AAA</td>
						<td>BBB</td><td>BBB</td>
						
					</tr>
				</table>
				</div>
				
		</div>
		
</body>
</html>
