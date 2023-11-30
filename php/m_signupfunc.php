<?PHP
session_start();

include('connection.php'); 


/*if(isset($_POST))
{
    
    $m_username = mysqli_real_escape_string($condb,$_POST['m_username']);
    $m_email = mysqli_real_escape_string($condb,$_POST['m_email']);
    $m_gender = mysqli_real_escape_string($condb,$_POST['gender']);
    $m_id = mysqli_real_escape_string($condb,$_POST['m_id']);
    $m_password = mysqli_real_escape_string($condb,$_POST['m_password']);
    }*/

    $nameErr = $emailErr = $genderErr = $idErr = $pwdErr = $rpwdErr = "";
    $name = $email = $gender = $id = $pwd = $rpwd = "";
            
if (empty($_POST["name"])) {
$nameErr = "*Name is required";
} else {
$name = test_input($_POST["name"]);
}

if (empty($_POST["email"])) {
    $emailErr = "*Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
  
if (empty($_POST["gender"])) {
    $genderErr = "*Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

if (empty($_POST["id"])) {
    $idErr = "*Student ID is required";
  } else {
    $id = test_input($_POST["id"]);
  }

if (empty($_POST["pwd"])) {
    $pwdErr = "*Password is required";
  } else {
    $pwd = test_input($_POST["password"]);
  }
 
  if (empty($_POST["rpwd"])) {
    $rpwdErr = "*Please confirm your password";
  } else {
    $rpwd = test_input($_POST["rpwd"]);
  }
  
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
    
    

    
?>