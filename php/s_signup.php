<html>
<head>
	<title>Dancing Society - Staff Sign Up</title>
	<link rel="stylesheet" href="../css/s_signup.css">
	
	<div id="logo">
	<img src="../images/logo.jpg" width="330" height="230">
	</div>
</head>

<body>
	<div class="box1">
	<br><br><br>
		<div class="formbox">
		<br><br><hr>
		<center><h3>Staff - Sign Up</h3></center>
		<hr>
            
        <form class="s_signup" action='s_signupfunc.php' method='POST'>
		<center>
		<br>
		<p>Email:<p>
		<input type="text" name="s_email" placeholder="Please type your email here" autocomplete="off">
		<br><br>
		
		<p>Student ID:</p>
		<input type="text" name="s_id" placeholder="Please type your Student ID here" autocomplete="off">
		<br><br>
		
		<p>Password:</p>
		<input type="password" name="s_password" placeholder="Please type your password here" autocomplete="off">
		<br><br><br>
		
		<input type="submit" class="button" value="Submit"><br><br>
		<a>Back to Login?</a>
		<a class="link" href="login.php">Click here</a><br>
        <a>Back to Staff Main Page?</a>
		<a class="link" href="s_mp.php">Click here</a>
		</center>
            </form>
        </div>
	</div>
</body>

</html>