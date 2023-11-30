<?php 
    include "connection.php";

    if(isset($_POST['submit'])){
        $fetchqry = "SELECT * FROM `member`";
		$result=mysqli_query($condb,$fetchqry);
		$num=mysqli_num_rows($result);
		@$no = $num + 1;
        
		$row = $_GET['joinID'];
        $id = $_POST['id'];
        $email = $_POST['email'];
        
		$qry = "INSERT INTO `jevents`(`no`,`jid`, `jemail`, `jno`) VALUES ('$no','$id','$email','$row')";
        
		
        $done = mysqli_query($condb,$qry);
		if($done==TRUE){
			 echo "<script>alert('Events joined succesfully');
				window.location.href='m_joinresult.php';</script>";
		}else{
            echo "<script>alert('Events join error');
				window.location.href='m_events.php';</script>";
        }
	}

mysqli_close($condb);
?>