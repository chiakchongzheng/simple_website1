<?php
include 'connection.php';
$sql = "DELETE FROM booking WHERE no='" . $_GET["no"] . "'";
if (mysqli_query($condb, $sql)) {
    #data berjaya disimpan. papar popup
		echo "<script>alert('Booking Deleted Successfully');
		window.location.href='s_booking.php';</script>";
	}
else {
    #data gagal disimpan papar popup
		echo "<script>alert('Error in Deleting Booking');
		window.history.back();</script>";
}

mysqli_close($condb);
?>