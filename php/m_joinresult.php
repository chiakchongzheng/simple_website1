<?php
include 'connection.php';
$row = $_GET['no'];
?>

<html>
<head>
<title>Join Event Result</title>
</head>
<body>
<link rel= "stylesheet" href="#"> 
<style>
 form{
	font-family:serif;
	font-weight: bold;
	font-size: 30px;
	text-align: center;
	color: black;
	
	width: 20%;
	padding:20px;
	border: 2px solid #1d2076;
	border-radius: 0px 0px 10px 10px;
	margin-top: 0px;
    margin-bottom: 0px;
	background-color:  #a9edff;
	margin-bottom: 0px;
}
form.long,h3.long{
	width:0px;
	length:0px;
	}
.btn {
  border: none;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
}
.warning {background-color: #ff9800;} /* Orange */
.warning:hover {background: #e68a00;}
.info {background-color: #2196F3;} /* Blue */
.info:hover {background: #0b7dda;}

h2{
	color: purple;
}

input[type="submit"]{
	font-size:20px;
	background:lavender;
	color:black;
	border-radius: 10px;
}

.box2{
	font-family:sans-serif;
}

#logo{ 
	position:fixed; 
	top:0; 
	left:0; 
}

body{
	margin:0;
	padding:0;
	font-family: sans-serif;
}

a{
	font-family:sans-serif;
}

.box1{
	width: 400px;
	height: 400px;
	background-color: #a9edff;
	color: black;
	top: 75%;
	left: 13%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	border-radius: 10px;
	padding: 70px 30px;
}

.back_hp{
	width: 80px;
	height: -90px;
	border-radius: 70%;
	margin-top: -40px;
	position: absolute;
	top: 180px;
	left: 150px;
}

.button1{
	width: 100%;
	padding: 10px 20px;
	margin-top: 30px;
	margin-left: 0px;
	border: none;
	outline: none;
	height: 35px;
	background: lavender;
	color: black;
	font-size: 20px;
	border-radius: 10px;
	text-decoration: none;
}
	</style>
	<br>
<center>	<br>
<form name="frmUser" method="post" action="m_joinresult.php?no=<?php echo $row ?>">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">

</div>
<?php
	$sql = "SELECT * FROM `jevents` WHERE `no` = '$row'";
    $result = mysqli_query($condb, $sql);
    $data = mysqli_fetch_array($result);
?>

<div class='box2'>

<h2>Join Event Result</h2>
<input type="hidden" name="no" class="txtField" value="<?php echo $data['no']; ?>">
Event  No:<br>
    <a><?php echo $data['jno']; ?></a>
<br>
<br>
Student ID:<br>
    <p><?php echo $data['jid']; ?></p>
<br>
<br>
Email:<br>
    <p><?php echo $data['jemail']; ?></p>
<br>
<br>
<a type="button" href="m_events.php">Back to events</a>
    </div>
</form>

    
    </center>
    </body>
</html>






