<?php
require_once ('connection.php');
$result = mysqli_query($condb,"SELECT * FROM feedback");
?>

<html>
<head>
    <meta charset="UTF-8">
	<title>Dancing Society - Member's Feedback(Staff)</title>
	<link rel="stylesheet" href="../css/s_feedback.css">
    
    <style>
    table{
    margin-top:-600px;
        }
        
    th, td{
    border:1px solid black;
        }
    </style>
    
    <?php include 'header1.php'; ?>
</head>

<body>
        <br>
        <center><h1>Member's Feedback</h1></center>
        
    <div class="box">
        <?php
            if (mysqli_num_rows($result) > 0) {
            ?>
            
            <center>
        <div class="table">
        <table>
	  <tr>
        <td>Name</td>
		<td>Text</td>
		<td>Delete</td>
	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
    <td><?php echo $row["name"]; ?></td>
	<td><?php echo $row["text"]; ?></td>
    <td><a href="s_deletefeedback.php?name=<?php echo $row["name"]; ?>">Delete</a></td>
      </tr>
			<?php
			$i++;
			}
			?>
             <?php
}
else
{
    echo "No result found";
}
?>
    
</table>
        <br><br>
        </div>
        </center>
    </div>
                
        
</body>

</html>