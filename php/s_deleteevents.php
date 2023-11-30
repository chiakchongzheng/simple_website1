<?php
include 'connection.php';
$sql = "DELETE FROM events WHERE no='" . $_GET["no"] . "'";
if (mysqli_query($condb, $sql)) {
    #data berjaya disimpan. papar popup
		echo "<script>alert('Events Deleted Successfully');
		window.location.href='s_events.php';</script>";
	}
else {
    #data gagal disimpan papar popup
		echo "<script>alert('Error in Deleting Events');
		window.history.back();</script>";
}

mysqli_close($condb);
?>