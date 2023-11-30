<?php
include 'connection.php';
$row = $_GET['bookID'];
?>


<?php 
    $no = "";
    $room = "";
    $date = "";
    $total = "";
    $note = "";

    if(isset($_POST['submit'])) {
        $room = mysqli_real_escape_string($condb, $_POST['room']);
        $date = mysqli_real_escape_string($condb, $_POST['date']);
        $total = mysqli_real_escape_string($condb, $_POST['total']);
        $note = mysqli_real_escape_string($condb, $_POST['note']);

        mysqli_query($condb,"UPDATE booking set room='" . $_POST['room'] . "', date='" . $_POST['date'] . "', total='" . $_POST['total'] . "', note='" . $_POST['note'] . "' WHERE no='" . $row . "'");
		$message = "Record Edited Successfully";
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dancing Society - Edit Facility Booking(Staff)</title>
    <link rel="stylesheet" href="../css/s_editbooking.css">

<style>
	table, th, td {
		border: 1px solid black;
	}
	}
.dropbtn {
  background-color: #FFFFCC;
  border: 10px;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
</head>
<body>
    <?php include 'header1.php' ?> 

	<div class='box'>
	<center>
		<form name="frmUser" method="post" action="s_editbooking.php?bookID=<?php echo $row ?>">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">

</div>
<?php
	$sql = "SELECT * FROM booking WHERE no = $row";
    $result = mysqli_query($condb, $sql);
    $data = mysqli_fetch_array($result);
?>

<div class='box2'>
<input type="hidden" name="no" class="txtField" value="<?php echo $data['no']; ?>">

<h2>Edit Booking</h2>
Room: <br>
<input type="text" name="room" class="txtField" value="<?php echo $data['room']; ?>">
<br>
<br>
Date: <br>
<input type="date" name="date" class="txtField" value="<?php echo $data['date']; ?>">
<br>
<br>
Total of people: <br>
<input type="text" name="total" class="txtField" value="<?php echo $data['total']; ?>">
<br>
<br>
Note:<br>
<input type="text" name="note" class="txtField" value="<?php echo $data['note']; ?>">
<br>
<br>
<input type="submit" name="submit" value="Submit" class="btn info"><br>
<a type="button" href="s_booking.php">Back</a>
    </div>
</form>
	</center>
    </div>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
    </body>
    </html>