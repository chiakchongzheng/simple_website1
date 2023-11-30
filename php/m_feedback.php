<?php
include ('connection.php');
?>

<html>
<head>
    <meta charset="UTF-8">
	<title>Dancing Society - Feedback(Member)</title>
	<link rel="stylesheet" href="../css/m_feedback.css">    
    <?php include 'header.php'; ?>
</head>

<body>
        <center><h1>Feedback</h1></center>
        
    <div class="box">
                
    <form action="" method="post">
    <br>
    <h2>Feedback Box</h2>
                
        <div class="long" action="" method="POST">
			<div class="col-md-offset-2 col-md-8">
			<font size=5>
                
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name here" Required>
                </div><br>
        
   <div class="form-group">
       <br>
       <label class="sr-only" for="text">Textbox:</label>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="text" class="form-control" id="text" name="text" placeholder="Please enter text here..." Required>
       
					</div>
                    <br>
                <center>
					<input type="submit" class="btn btn-primary btn-large" value="+ Feedback" name="submit">
                    <input type="reset" value="Reset">
                </center>
                </font>
            </div>
            </div>
				
       
					
			
	<?php 
	if(isset($_POST['submit'])){
		$fetchqry = "SELECT * FROM `feedback`";
		$result=mysqli_query($condb,$fetchqry);
        
		@$name = $_POST['name'];
        $text = $_POST['text'];
        
		$qry = "INSERT INTO `feedback`(`name`, `text`) VALUES ('$name','$text')";
		$done = mysqli_query($condb,$qry);
		if($done==TRUE){
			 echo "<script>alert('Feedback passed successfully!');
				window.location.href='m_mp.php';</script>";
		}
	}
	?>
                
    
            
        
          
        
        </form>
    </div>
        
        
        
</body>

</html>