<!DOCTYPE html>
<html>
<head>
<?php
include_once '../../php/includes/session.php'
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Register Office Staff</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	$(function(){
		$("#nav").load("nav.html");
});
	</script>

<link type="text/css" rel="stylesheet" href="../../css/main.css">
<link rel="stylesheet" href="../../css/register.css " type="text/css">
</head>
<body>
	<div id="nav"></div>
		
		<div class="content">
	
			  <div class="container">
			  <form action="../php/register.php" method="POST">
				<h1>Register</h1>
				<hr>

				<label for="name"><b>ID</b></label>
				<input type="text" placeholder="Enter ID" name="id" required>
				
				<label for="name"><b>Name</b></label>
				<input type="text" placeholder="Enter Name" name="name" required>

				<label for="nic"><b>NIC</b></label>
				<input type="text" placeholder="Enter NIC" name="nic" required>

				<label for="email"><b>Email</b></label>
				<input type="text" placeholder="Enter Email" name="email" required>

				<label for="dob"><b>Date of Birth</b></label>
				<input type="text" placeholder="Enter Date of Birth" name="dob" required>

				<label for="position"><b>Position</b></label>
				<input type="text" placeholder="Enter Position" name="position" required>

				<label><b>Gender:</b></label>
			 <label> <input type="radio" name="gender" value="male"> Male</label>
			 <label> <input type="radio" name="gender" value="female"> Female</label>
			  <label><input type="radio" name="gender" value="other"> Other</label>

				<br>
				</br><br>
				</br>
				<label for="psw"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" required>

				<hr>
			   
				<button type="submit" class="registerbtn">Register</button>
			</form>
			  <hr>
				<h2 align="center" ><a href="../admin/main_admin.php">Cancel</a></h2>
			  <hr>
			</div>
		</div>
</body>
</html>
