<?php
include ('connection.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dancing Society - Joined Record List(Staff)</title>
    <link rel="stylesheet" href="../css/s_addevents.css">
    <link rel= "stylesheet" href="../css/s_formstyle.css"> 
	<link rel= "stylesheet" href="../css/s_table.css">

<style>
	table, th, td {
		border: 1px solid black;
	}
	}
.dropbtn {
  background-color: #FFFFCC;
  border: 10px;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
</head>
<body>
    <?php include 'header1.php' ?> 

	<div class='box'>
        <left>
		<div class="long" action="" method="POST">
			<div class="col-md-offset-2 col-md-8">
			<font size=5>
                <h1>Add Joined Events</h1>
				
				<center>
		<div class="long" action="" method="POST">
			<div class="col-md-offset-2 col-md-8">
			<font size=5>
				
				<form action="#" method="post">
					<br>
					<div class="form-group">
						<label for="id">Student ID</label>
						<input type="text" class="form-control" id="id" name="id" placeholder="Student ID" Required>
					</div>
					<br>
					<div class="form-group">
						<label class="sr-only" for="email">Email</label>
						<input type="text" class="form-control" id="email" name="email" placeholder="Email" Required>
					</div>
					<br>
					<div class="form-group">
						<label class="sr-only" for="jno">Event Number</label>
						<input type="text" class="form-control" id="jno" name="jno" placeholder="Event Number" Required>
					</div>
					<br>
                    
					<input type="submit" class="btn btn-primary btn-large" value="Add" name="submit">
                    <input type="reset" value="Reset">
				</form>
				</font>
			</div>
		</div>
		</center>
					
			
	<?php 
	if(isset($_POST['submit'])){
		$fetchqry = "SELECT * FROM `jevents`";
		$result=mysqli_query($condb,$fetchqry);
		$num=mysqli_num_rows($result);
		@$no = $num + 1;
		@$id = $_POST['id'];
		@$email = $_POST['email'];
		@$jno = $_POST['jno'];

		$qry = "INSERT INTO `jevents`(`no`, `jid`, `jemail`, `jno`) 
        VALUES ($no,'$id','$email','$jno')";
		$done = mysqli_query($condb,$qry);
		if($done==TRUE){
			 echo "<script>alert('Joined event list succesfully added');
				window.location.href='s_jevents.php';</script>";
		}
	}
	?>
                </font>
    </div>
            </div>
        </left>
            </div>
    </body>
    </html><?php
include ('connection.php');
?>