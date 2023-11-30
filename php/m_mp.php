<?php
	session_start();
	include("connection.php");
?>

<html>
<head>
	<title>Dancing Society - Main Page(Member)</title>
	<link rel="stylesheet" href="../css/m_mp.css">
	
	<div id="logo">
	<img src="../images/logo.jpg" width="330" height="230">
	</div>
    
    <?php include 'header.php'; ?>
</head>

<body>
        <br>
        <center><h1>Welcome, 
        <?php
		$email = mysqli_real_escape_string($condb,$_SESSION['email']);
		echo $email;
	    ?></h1></center>
    
    <div class="slideshow">
    <?php include 'm_mp_slideshow.php'; ?>
    </div>
</body>

</html>