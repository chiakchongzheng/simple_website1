<?php
include 'connection.php';
$sql = "DELETE FROM jevents WHERE no='" . $_GET["no"] . "'";
if (mysqli_query($condb, $sql)) {
    #data berjaya disimpan. papar popup
		echo "<script>alert('Deleted Successfully');
		window.location.href='s_jevents.php';</script>";
	}
else {
    #data gagal disimpan papar popup
		echo "<script>alert('Error in Delete');
		window.history.back();</script>";
}

mysqli_close($condb);
?>