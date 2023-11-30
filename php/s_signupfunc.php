<?PHP
session_start();

include('connection.php'); 


if(isset($_POST))
{
    
    $s_email = mysqli_real_escape_string($condb,$_POST['s_email']);
    $s_id = mysqli_real_escape_string($condb,$_POST['s_id']);
    $s_password = mysqli_real_escape_string($condb,$_POST['s_password']);

    
    if(empty($s_email) or empty($s_id) or empty($s_password))
    {
        die("<script>alert('Your information is not complete.');
        window.history.back();</script>");
    }

    
    if(strlen($s_id)!=7 or !is_numeric($s_id))
    {
        die("<script>alert('Your Student ID must ONLY include 7 numbers.');
        window.history.back();</script>");
    }
    
    $command_insert="insert into staff
        (email,id,password)
        values
        ('$s_email','$s_id','$s_password')";
    
    if(mysqli_query($condb,$command_insert))
    {
        
        echo "<script>alert('Staff Sign Up Succuessful.');
        window.location.href='login.php';</script>";
    }
    else
    {
        
        echo "<script>alert('Staff Sign Up Failed.');
        window.history.back();</script>";
    }
    
}
?>