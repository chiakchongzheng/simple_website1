<html>
<head>
	<title>Dancing Society - Login</title>
	<link rel="stylesheet" href="../css/login.css">
	
	<div id="logo">
	<img src="../images/logo.jpg" width="330" height="230">
	</div>
</head>

<body>
	<div class="box1">
		
		<div id="member">
		<img src="../images/member.png" width="100" height="100">
		</div>
		
		<center><br><br>
		<h2>Sign up as Member</h2>
		<a class="button2" href="m_signup.php" >Member Sign Up</a>
		</center>

	</div>
	
	<div class="box2">
		<div class="loginbox">
		<br>
		<center><h3>Login</h3></center>
		<hr>
		<center><h4>Staff & Member</h4></center>
		<hr>
		
        <form class="login" action='loginfunc.php' method='POST'>
		<center>
		<p>Email:<p>
		<input type="text" name="log_email" placeholder="Please type your email here" autocomplete="off">
		<br>
		
		<p>Password:</p>
		<input type="password" name="log_password" placeholder="Please type your password here" autocomplete="off">
		<br>
		
		<p>Login as</p>
		<input type="radio" id="s_login" name="status" value="Staff">
		<label for="s_login">Staff</label>
		<input type="radio" id="m_login" name="status" value="Member">
		<label for="m_login">Member</label>
		<br><br><br>
		
		<input type="submit" class="button" value="Submit"><br>
		</center>
        </form>
		</div>
	</div>
</body>

</html>