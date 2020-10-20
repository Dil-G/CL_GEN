<!DOCTYPE html>
<html>
<head>
<?php
include_once '../../php/includes/session.php'
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Aesthetics</title>
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
		
			<h1>AESTHETICS</h1>
			<form class="search" action="action_page.php">
				<input type="text" placeholder="Search.." name="search">
				<button type="submit">Search</button>
			</form>
			<br>
			<br>
			<br>
			<hr>
			
		
			<div class="card">
				<form>
					<button type="submit" formaction="add_achievement.html">Add Achievement</button>
				</form>
				<br>
				<br>
			</div>
			  <div class="card">
				<h2><b>AESTHETIC A</b></h2>
				<hr>
				<table>
					<tr>
						<th>Achievement number</th>
						<th>Student Number</th>
						<th>Click to edit</th>
						
					</tr>
					<tr>
						<td>AAA</td>
						<td>BBB</td><td>BBB</td>
						
					</tr>
				</table>
				</div>
				<div class="card">
				
				<h2><b>AESTHETIC A</b></h2>
				<hr>
				<table>
					<tr>
						
						<th>Achievement number</th>
						<th>Student Number</th>
						<th>Click to edit</th>
						
					</tr>
					<tr>
						<td>AAA</td>
						<td>BBB</td>
						
					</tr>
				</table>
				</div>
				<div class="card">
				<h2><b>AESTHETIC A</b></h2>
				<hr>

				<table>
					<tr>
						
						<th>Achievement number</th>
						<th>Student Number</th>
						<th>Click to edit</th>
						
					</tr>
					<tr>
						<td>AAA</td>
						<td>BBB</td>
						
					</tr>
				</table>
				</div>
				<div class="card">
				<h2><b>AESTHETIC A</b></h2>
				<hr>

				<table>
					<tr>
						
						<th>Achievement number</th>
						<th>Student Number</th>
						<th>Click to edit</th>
						
					</tr>
					<tr>
						<td>AAA</td>
						<td>BBB</td>
						
					</tr>
				</table>
				</div>
		</div>
		
</body>
</html>
