<?php
include ('../../../connect.php');
$id_fasilitas = $_GET['id_fasilitas'];

	$sql1   = "delete from detail_facility_hotel where id_facility=$id_fasilitas";
	$delete1 = mysqli_query($conn, $sql1);
	if ($delete1){
		echo "<script>alert ('Data Successfully Delete');</script>";
	}
	else{
		echo "<script>alert ('Error');</script>";
	}
	
	$sql   = "delete from facility_hotel where id=$id_fasilitas";	
	$delete = mysqli_query($conn, $sql);
	if ($delete){
		echo "<script>alert ('Data Successfully Delete');</script>";
	}
	else{
		echo "<script>alert ('Error');</script>";
	}

	echo "<script>eval(\"parent.location='../?page=fasilitas'\");</script>";
?>