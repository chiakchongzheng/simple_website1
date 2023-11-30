<?php
include ('connection.php');
$result = mysqli_query($condb,"SELECT * FROM member");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dancing Society - Members List(Staff)</title>
    <link rel="stylesheet" href="../css/s_memberlist.css">

</head>
    
<body>
    <?php include 'header1.php' ?> 

    <center><h1>Members List</h1></center>
	<div class='box'>
        <br><br>
        <table>
        <tr>
		<td>No.</td>
	    <td>Username</td>
		<td>Gender</td>
		<td>Email</td>
		<td>Student ID</td>
		<td>Password</td>
		<td>Joined Events</td>
		<td>Edit</td>
        <td>Delete</td>
	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	<td><?php echo $row["no"]; ?></td>
	<td><?php echo $row["username"]; ?></td>
	<td><?php echo $row["gender"]; ?></td>
	<td><?php echo $row["email"]; ?></td>
	<td><?php echo $row["id"]; ?></td>
	<td><?php echo $row["password"]; ?></td>
	<td><?php echo $row["status"]; ?></td>
    <td><a href="s_editmember.php?no=<?php echo $row["no"]; ?>">Edit</a></td>
    <td><a href="s_deletemember.php?no=<?php echo $row["no"]; ?>">Delete</a></td>
      </tr>
			<?php
			$i++;
			}
			?>
        </table>
        <br>
        <a class="add" href="s_addmember.php" >Add Member</a>
    </div>


    </body>
    </html>