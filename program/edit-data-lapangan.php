<?php
include "../koneksi.php";

if(isset($_POST["simpan"])){

	$id_lapangan = $_get['id_lapangan'];
	$nama_lapangan = $_POST['nama_lapangan'];
	$alamat = $_POST['alamat'];
	$harga_sewa = $_POST['harga_sewa'];
	// echo $id_lapangan;
	$querylap = "UPDATE `lapangan` SET `nama_lapangan`= '$nama_lapangan', `alamat`= '$alamat', `harga_sewa`= '$harga_sewa' WHERE `id_lapangan`= '$id_lapangan'";
	$result = mysqli_query($conn,$querylap);
	// header("location:admin.php");

}


?>