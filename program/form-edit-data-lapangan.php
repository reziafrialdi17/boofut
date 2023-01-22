<?php

include "../koneksi.php";
	$id_lapangan = $_GET['id_lapangan'];
	$querylapangan = "SELECT * FROM lapangan WHERE id_lapangan= '$id_lapangan'";
	$result = mysqli_query($conn,$querylapangan);
	$lapangan = mysqli_fetch_assoc($result);

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
    <title>Form Edit Data Lapangan</title>
    <link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
<div>
		<div class="container-edit-2">
			<form  method="post" class="form" id="box">
                <?php
                    
                    include "../koneksi.php";
                    if(isset($_POST["simpan"])){
                        $id = $_GET['id_lapangan'];
                        $nama_lapangan = $_POST['nama_lapangan'];
                        $alamat = $_POST['alamat'];
                        $harga_sewa = $_POST['harga_sewa'];
                        // echo $id_lapangan;
                        $querylap = "UPDATE `lapangan` SET `nama_lapangan`= '$nama_lapangan', `alamat`= '$alamat', `harga_sewa`= '$harga_sewa' WHERE `id_lapangan`= '$id'";
                        $result = mysqli_query($conn,$querylap);
                        header("location:admin.php");

                    }

                
                ?>
				<h3>Futsal Boofut</h3>
				<h5>Tambah data lapangan</h5>

                <!--input id lapangan-->
				<input type="text" name="id_lapangan" disabled value="<?php echo $lapangan['id_lapangan']; ?>" placeholder="KD Lapangan" autocomplete="off" required>

                <!--input nama lapangan-->
				<input type="text" name="nama_lapangan" value="<?php echo $lapangan['nama_lapangan']; ?>" placeholder="Nama Lapangan" autocomplete="off" required>

                <!--input alamat-->
				<input type="text" name="alamat" value="<?php echo $lapangan['alamat']; ?>" placeholder="Alamat" autocomplete="off" required>

                <!--input harga sewa-->
                <input type="text" name="harga_sewa" value="<?php echo $lapangan['harga_sewa']; ?>" placeholder="Harga Sewa" autocomplete="off" required>

				
				<input type="submit" name="simpan" value="Edit" class="btn">
				
				
			</form>
		</div>
    </div>
</body>
</html>