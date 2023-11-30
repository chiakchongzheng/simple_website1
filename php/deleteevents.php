<?php
include'connection.php';
$result = mysqli_query($condb,"SELECT * FROM events");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dancing Society - Delete Events(Staff)</title>
    <link rel= "stylesheet" href="../css/s_deleteevents.css"> 
    
<style>
	table, th, td {
		border: 1px solid black;
	}
</style>
</head>
<body>
	<?php include 'header1.php' ?>
    
	<div class="box">
	<h2>Delete Events</h2>
	<center>
	<table>
<br>
	<tr>
	<td>No.</td>
	<td>Tittle</td>
	<td>Poster</td>
	<td>Equipment and Requirement</td>
	<td>Fee</td>
	<td>Date and Time</td>
	<td>Note</td>
	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr>

	<td><?php echo $row["no"]; ?></td>
	<td><?php echo $row["tittle"]; ?></td>
	<td><?php echo $row["poster"]; ?></td>
	<td><?php echo $row["equip"]; ?></td>
	<td><?php echo $row["fee"]; ?></td>
	<td><?php echo $row["date"]; ?></td>
    <td><?php echo $row["note"]; ?></td>
	<td><a href="deleteevents_process.php?no=<?php echo $row["no"]; ?>">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</center>
	</div>
</body>
</html>