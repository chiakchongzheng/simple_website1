<?php
require_once ('connection.php');
$result = mysqli_query($condb,"SELECT * FROM events");
?>

<html>
<head>
    <meta charset="UTF-8">
	<title>Dancing Society - Events(Staff)</title>
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
        <center><h1>Events List</h1></center>
        
        <div class="box">
        <?php
            if (mysqli_num_rows($result) > 0) {
            ?>
            
            <center>
        <div class="table">
        <table>
	  <tr>
        <td>No.</td>
		<td>Tittle</td>
	    <td>Equipment and Requirement</td>
		<td>Fee</td>
		<td>Date and Time</td>
		<td>Note</td>
		<td>Edit</td>
		<td>Delete</td>
	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
    <td><?php echo $row["no"]; ?></td>
	<td><?php echo $row["tittle"]; ?></td>
	<td><?php echo $row["equip"]; ?></td>
	<td><?php echo $row["fee"]; ?></td>
	<td><?php echo $row["date"]; ?></td>
	<td><?php echo $row["note"]; ?></td>
    <td><a href="s_editevents.php?eventsID=<?php echo $row["no"]; ?>">Edit</a></td>
    <td><a href="s_deleteevents.php?no=<?php echo $row["no"]; ?>">Delete</a></td>
      </tr>
			<?php
			$i++;
			}
			?>
    
</table>
    <a type="button" href="s_addevents.php">Add Events</a>
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