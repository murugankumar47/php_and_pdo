<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>REGISTER USING BOOTSTRAP</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../STYLE/login.css">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
		    
			<div class="signup">
				<form action="loginpdo1.php" method="POST">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="Fname" placeholder="User name" required="">
					<input type="password" name="Pass" placeholder="Password" required="">
					<button name="btn" type="submit">REGISTER</button>
				</form>
			</div>
	</div>
</body>
</html>