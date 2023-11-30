<?php
include ("connection.php");
?>

<html>
<head>
	<title>Dancing Society - Member Sign Up</title>
	<link rel="stylesheet" href="../css/m_signup.css">
	
	<div id="logo">
	<img src="../images/logo.jpg" width="330" height="230">
	</div>
    
    <style>
        .error{color:red;}
    </style>
</head>

<body>
    
<?php
    $nameErr = $emailErr = $genderErr = $idErr = $pwdErr = $rpwdErr = "";
    $name = $email = $gender = $id = $pwd = $rpwd = "";
            
    if (empty($_POST["m_username"])) {
        $nameErr = "*Name is required";
    } else {
        $name = test_input($_POST["m_username"]);
    }

    if (empty($_POST["m_email"])) {
        $emailErr = "*Email is required";
    } else {
        $email = test_input($_POST["m_email"]);
    }
  
    if (empty($_POST["gender"])) {
        $genderErr = "*Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }

    if (empty($_POST["m_id"])) {
        $idErr = "*Student ID is required";
    } else {
        $id = test_input($_POST["m_id"]);
    }

    if (empty($_POST["m_password"])) {
        $pwdErr = "*Password is required";
    } else {
        $pwd = test_input($_POST["m_password"]);
    }
 
    if (empty($_POST["m_password1"])) {
        $rpwdErr = "*Please confirm your password";
    } else {
        $rpwd = test_input($_POST["m_password1"]);
    }
  
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
    
	<div class="box1">
	<br>
		<div class="formbox">
		<br><hr>
		<center><h3>Member - Sign Up</h3></center>
		<hr>
            
        <form action='m_signup.php' method='POST'>
        
        <center>
        <p><span class="error">Missing Information!!!</span></p>
        
        <div class="input-group">
        <label>Username:</label>
        <input type="text" id="m_username" name="m_username" placeholder="Username" autocomplete="off"><br>
        <span class="error"> <?php echo $nameErr;?></span>
            </div><br>
            
		<div class="input-group">
        <label>Email:</label>
        <input type="text" name="m_email" placeholder="Email" autocomplete="off"><br>
        <span class="error"> <?php echo $emailErr;?></span>
            </div><br>

<div class="input-group">
    <label>Gender:</label>
    <input type="radio" id="gender_m" name="gender" value="Male">
    <label for="gender_m">Male</label>
    <input type="radio" id="gender_f" name="gender" value="Female">
    <label for="gender_f">Female</label><br>
    <span class="error"> <?php echo $genderErr;?></span>
</div><br>

<div class="input-group">
    <label>Student ID:</label>
    <input type="text" name="m_id" placeholder="Student ID" autocomplete="off"><br>
    <span class="error"> <?php echo $idErr;?></span>
    <br>
</div>

<div class="input-group">
    <label>Password:</label>
    <input type="password" name="m_password" placeholder="Password" autocomplete="off"><br>
    <span class="error"> <?php echo $pwdErr;?></span>
    <br>
</div>

<div class="input-group">
    <label>Confirm Password:</label>
    <input type="password" name="m_password1" placeholder=" Confirm Password" autocomplete="off"><br>
    <span class="error"> <?php echo $rpwdErr;?></span>
</div><br>

<input type="submit" class="button" value="Submit">
        <input type="reset" value="Reset">
            <br><br>
		<a>Back to Login?</a>
		<a class="link" href="login.php">Click here</a>
            </center>
            </form>
		</div>
	</div>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($nameErr) && empty($emailErr) && empty($genderErr) && empty($idErr) && empty($pwdErr) && empty($rpwdErr)) {
        $m_username = $_POST["m_username"];
        $m_email = $_POST["m_email"];
        $gender = $_POST["gender"];
        $m_id = $_POST["m_id"];
        $m_password = $_POST["m_password"];
        
        $fetchqry = "SELECT * FROM `member`";
		$result=mysqli_query($condb,$fetchqry);
		$num=mysqli_num_rows($result);
		@$no = $num + 1;
        
        $query = "INSERT INTO member (no, username, gender, email, id, password) VALUES ($no, '$m_username', '$gender','$m_email', '$m_id', '$m_password')";
        
        if(mysqli_query($condb, $query)) {
            echo "<script>alert('Member account created successfully.');</script>";
        } else {
            echo "<script>alert('Error creating member account: " . mysqli_error($condb) . "');</script>";
        }
    }
    mysqli_close($condb);
}
?>




		
