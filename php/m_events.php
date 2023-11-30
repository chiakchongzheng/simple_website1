<?php
require_once ('connection.php');
$result = mysqli_query($condb,"SELECT * FROM events");
?>

<html>
<head>
    <meta charset="UTF-8">
	<title>Dancing Society - Events(Member)</title>
	<link rel="stylesheet" href="../css/m_events.css">
    <link rel= "stylesheet" href="../css/s_formstyle.css"> 
	<link rel= "stylesheet" href="../css/s_table.css"> 
	
	<div id="logo">
	<img src="../images/logo.jpg" width="330" height="230">
	</div>
    
    <style>
    table{
    margin-top:none;
        }
        
    th, td{
    border:1px solid black;
        }
    </style>
    
    <?php include 'header.php'; ?>
</head>

<body>
        <br>
        <center><h1>Events</h1></center>
        
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
		<td>Join</td>
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
    <td><a href="m_joinevents.php?joinID=<?php echo $row["no"]; ?>">Join</a></td>
      </tr>
			<?php
			$i++;
			}
			?>
    
</table>
            <center><a class="button" type="button" href="m_quitevent.php" >Quit event</a></center>
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