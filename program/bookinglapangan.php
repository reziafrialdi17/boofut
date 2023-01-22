<?php
include "../koneksi.php";
if (isset($_POST['simpan'])) {
	$id_booking = $_POST['id_booking'];
	$id_lapangan = $_POST['id_lapangan'];
	$id_user = $_POST['id_user'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$no_hp = $_POST['no_hp'];
	$nama_lapangan = $_POST['nama_lapangan'];
	$alamat = $_POST['alamat'];
	$harga_sewa = $_POST['harga_sewa'];
	$lama_sewa = $_POST['lama_sewa'];
	$total_harga_sewa = $_POST['total_harga_sewa'];
	$bayar_booking = $_POST['bayar_booking'];

	$query = "INSERT INTO booking VALUES ('$id_booking','$id_lapangan','$id_user','$nama','$email',
				'$no_hp','$nama_lapangan','$alamat','$harga_sewa','$lama_sewa','$total_harga_sewa','$bayar_booking')";
	$resultbooking = mysqli_query($conn,$query);
	if ($resultbooking) {
		echo"
		<script>
		alert('Data berhasil di simpan');
		document.location.href = 'user.php';
		</script>";
	}else{
	echo"
		<script>
		alert('Data gagal di simpan');
		document.location.href = 'user.php';
		</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- API Google Font untuk Display (Righteous) -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

	<!-- API Google Font untuk header (Poppins - Semibold) -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

    <!-- API Google Font untuk desc (Poppins - Regular -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

	<link rel="icon" type="image/png" href="../asset/Logo Boofut hijau.png">
	<title>Form Booking Lapangan</title>
	<link rel="stylesheet" type="text/css" href="form.css">

</head>
<body>
<div>
		<div class="container-edit-3">
			<form action="" method="post" class="form" id="box" onsubmit="return checkStuff()">

				<h3>Futsal Boofut</h3>
				<h5>Tambah data lapangan</h5>

                <!--input id booking-->
				<input type="text" name="id_booking" placeholder="ID Booking" autocomplete="off" required>

                <!--input id lapangan-->
				<input type="text" name="id_lapangan" placeholder="ID Lapangan" autocomplete="off" required>

				<!--input id user-->
				<input type="text" name="id_user" placeholder="ID User" autocomplete="off" required>

				<!--input nama-->
				<input type="text" name="nama" placeholder="Nama" autocomplete="off" required>

				<!--input email-->
				<input type="text" name="email" placeholder="Email" autocomplete="off" required>

				<!--input no_hp-->
				<input type="text" name="no_hp" placeholder="No Handphone" autocomplete="off" required>

                <!--input nama lapangan-->
				<input type="text" name="nama_lapangan" placeholder="Nama Lapangan" autocomplete="off" required>

                <!--input alamat-->
                <input type="text" name="alamat" placeholder="Alamat" autocomplete="off" required>

				<!--input harga sewa-->
				<input type="text" name="harga_sewa" placeholder="Harga Sewa" autocomplete="off" required>
				
				<!--input lama sewa-->
				<input type="text" name="lama_sewa" placeholder="Lama Sewa" autocomplete="off" required>

				<!--input total harga sewa-->
				<input type="text" name="total_harga_sewa" placeholder="Total Harga Sewa" autocomplete="off" required>

				<!--input bayar booking-->
				<input type="text" name="bayar_booking" placeholder="Bayar Booking" autocomplete="off" required>

				
				<input type="submit" name="simpan" value="Tambah" class="btn1">
				
				
			</form>
		</div>
    </div>
</body>
</html>