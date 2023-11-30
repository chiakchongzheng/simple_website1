<?php
require_once ('connection.php');
$result = mysqli_query($condb,"SELECT * FROM booking");
?>

<html>
<head>
    <meta charset="UTF-8">
	<title>Dancing Society - Facility Booking List(Staff)</title>
	<link rel="stylesheet" href="../css/s_booking.css">
    
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
        <center><h1>Facility Booking List</h1></center>
        
    <div class="box">
    <table>
	  <tr>
        <td>No.</td>
		<td>Room</td>
		<td>Date and Time</td>
		<td>Total of people</td>
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
	<td><?php echo $row["room"]; ?></td>
	<td><?php echo $row["date"]; ?></td>
	<td><?php echo $row["total"]; ?></td>
	<td><?php echo $row["note"]; ?></td>
    <td><a href="s_editbooking.php?bookID=<?php echo $row["no"]; ?>">Edit</a></td>
    <td><a href="s_deletebooking.php?no=<?php echo $row["no"];  ?>">Delete</a></td>
      </tr>
			<?php
			$i++;
			}
			?>
    
</table>
    <a type="button" href="s_addbooking.php">Add Booking</a>
        </div>
        <br>
</body>

</html>