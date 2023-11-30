<?php
require_once ('connection.php');
$result = mysqli_query($condb,"SELECT * FROM jevents");
?>

<html>
<head>
    <meta charset="UTF-8">
	<title>Dancing Society - Joined Events(Staff)</title>
	<link rel="stylesheet" href="../css/s_events.css">
    
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
        <br><br>
        <center><h1>Joined Events List[Member]</h1></center>
        
        <div class="box">
        <?php
            if (mysqli_num_rows($result) > 0) {
            ?>
            
            <center>
        <div class="table">
        <table>
	  <tr>
        <td>No.</td>
        <td>Student ID</td>
		<td>Email</td>
	    <td>Event No.</td>
        <td>Action</td>
	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
    <td><?php echo $row["no"]; ?></td>
    <td><?php echo $row["jid"]; ?></td>
	<td><?php echo $row["jemail"]; ?></td>
	<td><?php echo $row["jno"]; ?></td>
    <td>
        <a href="s_jeventsedit.php?no=<?php echo $row["no"]; ?>">Edit</a><br><br>
        <a href="s_jeventsdelete.php?no=<?php echo $row["no"]; ?>">Delete</a>
    </td>
      </tr>
			<?php
			$i++;
			}
			?>
    
</table>
            <a type="button" href="s_jeventsadd.php">Add</a>
        </div>
</center>

 <?php
}
else
{
    echo "No result found";
}
?>
        </div>
        
</body>

</html>