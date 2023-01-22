<?php
include "../koneksi.php";
if (isset($_POST['simpan'])) {
	$id_lapangan = $_POST['id_lapangan'];
	$nama_lapangan = $_POST['nama_lapangan'];
	$alamat = $_POST['alamat'];
	$harga_sewa = $_POST['harga_sewa'];

	$query = "INSERT INTO lapangan VALUES ('$id_lapangan','$nama_lapangan','$alamat','$harga_sewa')";
	$resultlapangan = mysqli_query($conn,$query);
	if ($resultlapangan) {
		echo"
		<script>
		alert('Data berhasil di simpan');
		document.location.href = 'admin.php';
		</script>";
	}else{
	echo"
		<script>
		alert('Data gagal di simpan');
		document.location.href = 'admin.php';
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
    <link rel="stylesheet" type="text/css" href="form.css">
    <title>Tambah Data Lapangan</title>
</head>
<body>

<div>
		<div class="container-edit-1">
			<form action="" method="post" class="form" id="box" onsubmit="return checkStuff()">

				<h3>Futsal Boofut</h3>
				<h5>Tambah data lapangan</h5>

                <!--input id lapangan-->
				<input type="text" name="id_lapangan" placeholder="ID Lapangan" autocomplete="off" required>

                <!--input nama lapangan-->
				<input type="text" name="nama_lapangan" placeholder="Nama Lapangan" autocomplete="off" required>

                <!--input alamat-->
				<input type="text" name="alamat" placeholder="Alamat" autocomplete="off" required>

                <!--input harga sewa-->
                <input type="text" name="harga_sewa" placeholder="Harga Sewa" autocomplete="off" required>

				
				<input type="submit" name="simpan" value="Tambah" class="btn">
				
				
			</form>
		</div>
    </div>

</body>
</html>