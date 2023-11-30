<?PHP
session_start();

include('connection.php');



if(empty($_POST['log_email']))
{
	
	die("<script>alert('Email is require!!!');
	window.location.href='login.php';</script>");
}
elseif(empty($_POST['log_password']))
{
	die("<script>alert('Password is require!!!');
	window.location.href='login.php';</script>");
}
elseif(empty($_POST['status']))
{
	die("<script>alert('Please select staff or member');
	window.location.href='login.php';</script>");
}

if($_POST['status']=='Staff')
{
	$table = "staff";
	$info1 = "email";
	$info2 = "password";
	$location = "s_mp.php";
}

else if($_POST['status']=='Member')
{
	$table = "member";
	$info1 = "email";
	$info2 = "password";
	$location = "m_mp.php";
}



$email = mysqli_real_escape_string($condb,$_POST['log_email']);
$password = mysqli_real_escape_string($condb,$_POST['log_password']);


$command_login = "select* from $table where $info1='$email' and $info2='$password' limit 1";




$implement_login = mysqli_query($condb,$command_login);




if(mysqli_num_rows($implement_login)==1)
{
	
	$data = mysqli_fetch_array($implement_login);
	$_SESSION[$info1] = $data[$info1];
	$_SESSION[$info2] = $data[$info2];

	echo"<script>window.location.href='$location';</script>";
}else{
	
	echo "<script>alert('Login Failed.');
	window.history.back();</script>";
}

mysqli_close($condb);
?>