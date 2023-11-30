<?php
include 'connection.php';
$sql = "DELETE FROM feedback WHERE name='" . $_GET["name"] . "'";
if (mysqli_query($condb, $sql)) {
    #data berjaya disimpan. papar popup
		echo "<script>alert('Feedback Deleted Successfully');
		window.location.href='s_feedback.php';</script>";
	}
else {
    #data gagal disimpan papar popup
		echo "<script>alert('Error in Deleting feedback');
		window.history.back();</script>";
}

mysqli_close($condb);
?>