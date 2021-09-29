<!DOCTYPE html>
<html>
	<head>

		<link rel="stylesheet" href="New_User_Styles.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="icon" href="3dgifmaker15292.gif" type="image/gif" height="16px">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="zxcvbn-4.4.2/dist/zxcvbn.js" type="text/javascript"></script>
		<script src="newUser.js" type="text/javascript"></script>
		
	</head>
	<body class="w3-center">
		<img src="Capture.png" style="height:128px" class="title-image">
		<div style="margin:64px;" class="w3-container w3-aqua w3-center">
			<div id="registrationForm" class="w3-panel w3-pale-blue">
				<h2><b>Create New Account</b></h2>
				<br>
				<h5><b>Registration Form</b></h5>
				<form action="New_User.php" id="#form" method="post" name="#form">
					<label for="email">Email:</label><br>
					<input id="email" type="email"><br>
						<label for="pw">Password:</label><br>
						<input id="pw" name="pw" type="password"><br>
						<div class="indicator">
							<span class="weak"></span>
							<span class="medium"></span>
							<span class="strong"></span>
						</div>
						<div class="text"></div>
					<label for="cpw">Confirm Password:</label><br>
					<input id="cpw" type="password"><br>
					<br>
					<input type="submit" name="submit" id="submit" value="Register">
					<br>
					<div class="w3-center">
						<?php
							if(isset($_POST['submit'])){
								if(isset($_POST['pw']) && isset($_POST['cpw']) && $_POST['pw'] != $_POST['cpw'])
								{
									echo '<script>alert("\u26A0 \"Confirm Password\" field must match \"Password\" field! \u26A0")</script>';
								}
								else if(!isset($_POST['email']) || empty(trim($_POST['email'])))
								{
									echo '<script>alert("\u26A0 \"Email\" field cannot be left blank! \u26A0")</script>';
								}
								else if(!isset($_POST['cpw']) || empty(trim($_POST['cpw'])))
								{
									echo '<script>alert("\u26A0 \"Confirm Password\" field cannot be left blank! \u26A0")</script>';
								}
								else if(!isset($_POST['pw']) || empty(trim($_POST['pw'])))
								{
									echo '<script>alert("\u26A0 \"Password\" field cannot be left blank! \u26A0")</script>';
								}
								else if(!isset($_POST['pw']) && !isset($_POST['cpw']) && !isset($_POST['email']) || empty(trim($_POST['pw'])) && empty(trim($_POST['cpw'])) && empty(trim($_POST['email'])))
								{
									echo '<script>alert("\u26A0 Registration Form cannot be left blank! \u26A0")</script>';
								}
								else
								{
									header("Location:Login.html");
								}
								}
							?>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>