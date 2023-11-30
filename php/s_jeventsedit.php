
<?php
include 'connection.php';
$row = $_GET['no'];

    if(isset($_POST['submit'])) {
        $jid = mysqli_real_escape_string($condb, $_POST['jid']);
        $jemail = mysqli_real_escape_string($condb, $_POST['jemail']);
        $jno = mysqli_real_escape_string($condb, $_POST['jno']);
        
        mysqli_query($condb,"UPDATE jevents set jid='" . $_POST['jid'] . "', jemail='" . $_POST['jemail'] . "', jno='" . $_POST['jno'] . "' WHERE no='" . $row . "'");
		$message = "Record Edited Successfully";
    }
?>

<html>
<head>
<title>Edit Events</title>
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
<form name="frmUser" method="post" action="s_jeventsedit.php?no=<?php echo $row ?>">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">

</div>
<?php
	$sql = "SELECT * FROM jevents WHERE no = $row";
    $result = mysqli_query($condb, $sql);
    $data = mysqli_fetch_array($result);
?>

<div class='box2'>
<input type="hidden" name="no_soalan" class="txtField" value="<?php echo $data['no_soalan']; ?>">

<h2>Edit Join Events List</h2>
Student ID: <br>
<input type="text" name="jid" class="txtField" value="<?php echo $data['jid']; ?>">
<br>
<br>
Email: <br>
<input type="text" name="jemail" class="txtField" value="<?php echo $data['jemail']; ?>">
<br>
<br>
Event Number: <br>
<input type="text" name="jno" class="txtField" value="<?php echo $data['jno']; ?>">
<br>
<br>

<input type="submit" name="submit" value="Submit" class="btn info"><br>
<a type="button" href="s_jevents.php">Back</a>
    </div>
</form>

    
    </center>
    </body>
</html>






