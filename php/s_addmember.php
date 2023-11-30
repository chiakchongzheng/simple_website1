<?php
include ('connection.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dancing Society - Add Member(Staff)</title>
    <link rel="stylesheet" href="../css/s_addevents.css">

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
                <h1>Add Member</h1>
				
				<center>
		<div class="long" action="" method="POST">
			<div class="col-md-offset-2 col-md-8">
			<font size=5>
				
				<form action="" method="post">
					<br>
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" id="username" name="username" placeholder="Username" Required>
					</div>
					<br>
					<div class="form-group">
						<label for="gender">Gender</label>
						<input type="text" class="form-control" id="gender" name="gender" placeholder="Gender" Required>
					</div>
					<br>
					<div class="form-group">
						<label class="sr-only" for="email">Email</label>
						<input type="text" class="form-control" id="email" name="email" placeholder="Email" Required>
					</div>
					<br>
					<div class="form-group">
						<label class="sr-only" for="id">Student ID</label>
						<input type="text" class="form-control" id="id" name="id" placeholder="Student ID" Required>
					</div>
					<br>
                    <div class="form-group">
						<label class="sr-only" for="password">Password</label>
						<input type="text" class="form-control" id="password" name="password" placeholder="Password" Required>
					</div>
                    <br>
                    <div class="form-group">
						<label class="sr-only" for="status">Joined event(s)</label>
						<input type="text" class="form-control" id="status" name="status" placeholder="Joined event(s)" Required>
					</div>
                    <br>
					<input type="submit" class="btn btn-primary btn-large" value="+ Add Members" name="submit">
                    <input type="reset" value="Reset">
				</form>
				</font>
			</div>
		</div>
		</center>
					
			
	<?php 
	if(isset($_POST['submit'])){
		$fetchqry = "SELECT * FROM `member`";
		$result=mysqli_query($condb,$fetchqry);
		$num=mysqli_num_rows($result);
		@$no = $num + 1;
		@$username = $_POST['username'];
		@$gender = $_POST['gender'];
		@$email = $_POST['email'];
		@$id = $_POST['id'];
		@$password = $_POST['password']; 
        @$status = $_POST['status']; 
		$qry = "INSERT INTO `member`(`no`, `username`, `gender`, `email`, `id`, `password`, `status`) VALUES ($no,'$username','$gender','$email','$id','$password','$status')";
		$done = mysqli_query($condb,$qry);
		if($done==TRUE){
			 echo "<script>alert('Member succesfully added');
				window.location.href='s_memberlist.php';</script>";
		}
	}
	?>
                </font>
    </div>
            </div>
        </left>
            </div>
    </body>
    </html>