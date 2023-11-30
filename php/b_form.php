<html>
<head>
    <meta charset="UTF-8">
	<title>Dancing Society - Facility Booking(Member)</title>
	<link rel="stylesheet" href="../css/b_form.css">
	
	<div id="logo">
	<img src="../images/logo.jpg" width="330" height="230">
	</div>
    
    <style>

    </style>
    
    <?php include 'header.php'; ?>
</head>

<body>
        
    <div>    
	<br>
        <center><h1>Facility Booking</h1></center>
    <br>
    <h2>Booking List</h2>
    <br>	
	<br><br><br>
		<div class="formbox">
		<br><br><hr>
		<center><h3>Facility Booking Form</h3></center>
		<hr>
            
        <form class="m_signup" action='m_signupfunc.php' method='POST'>

		<div>
		<br>
		<p>name<p>
		<input type="text" name="b_name" placeholder="Please type your name here" autocomplete="off">
		<br><br>
		
		<p>student ID<p>
		<input type="text" name="b_ID" placeholder="Please type in your student ID" autocomplete="off">
		<br><br>
		
		<p>Gender</p>
		<input type="radio" id="m_gender" name="gender" value="Male">
		<label for="m_gender">Male</label>
		<input type="radio" id="f_gender" name="gender" value="Female">
		<label for="f_gender">Female</label>
		
		<p>telephone number<p>
		<input type="text" name="b_number" placeholder="Please type in your telephone number" autocomplete="off">
		<br><br>
		
		<p>number of participants<p>
		<input type="number" name="b_participants" >
		<br><br>
		
		<p>Room:<p>
		<select name="room">';
		<option value="B201">B201</option>
		<option value="MH">Main Hall</option>
		<option value="J007">J007</option>
		<?php $room = $_POST['room'];?>
		</select>
		<br><br>
		
		<p>Start Time:<p>
		<input type="time" name="b_time">
		<br><br>
		
		<p>total hour<p>
		<input type="radio" id="tt_hour" name="b_hour" value="1">
		<label for="tt_hour">1 Hour(RM18)</label>
		<input type="radio" id="tt_hour" name="b_hour" value="1">
		<label for="tt_hour">2 Hour(RM35)</label>
		<input type="radio" id="tt_hour" name="b_hour" value="1">
		<label for="tt_hour">3 Hour(RM50)</label>
		<br><br>
		
		<input type="submit" class="button" value="Submit">
		<br><br>
		<a>Back to main page?</a>
		<a class="link" href="m_booking.php">Click here</a>
            </div>
            </form>
			</div>
			</div>
        <br>
</body>

</html>