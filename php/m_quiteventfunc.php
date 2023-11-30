<?php 
    include "connection.php";
    $id = $_POST['id'];

    $sql = mysqli_query($condb, "DELETE FROM `jevent` WHERE `jid` = '$id'");

    if (mysqli_query($condb, $sql)) {
    #data berjaya disimpan. papar popup
		echo "<script>alert('Event quit successfully');
		window.location.href='s_events.php';</script>";
	}
    else {
    #data gagal disimpan papar popup
		echo "<script>alert('Invalid Student ID!');
		window.history.back();</script>";
}

mysqli_close($condb);
?>