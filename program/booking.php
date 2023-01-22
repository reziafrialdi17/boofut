<?php
session_start();
include "../koneksi.php";
	$ambildata = "SELECT * FROM lapangan ORDER BY id_lapangan DESC";
	$resultdata = mysqli_query($conn,$ambildata);
?>
<!DOCTYPE html>
<html>
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
	<title>Halaman Data Lapangan - Booking</title>
	<link rel="stylesheet" type="text/css" href="booking.css">
</head>
<body>

		<!--main-->
		<h1 class="ket">Data lapangan</h1>

		<table class="table1">
        	<tr>
            	<th>ID Lapangan</th>
	        	<th>Nama Lapangan</th>
	        	<th>Alamat</th>
	        	<th>Harga Sewa</th>
	        	<th>Aksi</th>
        	</tr>
	

		<tr>
			<?php while ($datalapangan = mysqli_fetch_assoc($resultdata)):?>
			<tr>
				<td><?php echo $datalapangan['id_lapangan']; ?></td>
				<td><?php echo $datalapangan['nama_lapangan']; ?></td>
				<td><?php echo $datalapangan['alamat']; ?></td>
				<td><?php echo $datalapangan['harga_sewa']; ?></td>

            	<!--booking-->
            	<td><a href="bookinglapangan.php?id_lapangan=<?php echo $datalapangan['id_lapangan'] ?>">
            	<button type="button" class="booking-btn">Booking</button></a></td>
			</tr>
		<?php endwhile; ?>
		</tr>
	</table>

	<!--footer-->
	<footer>
        <p> &copy 2022 | Kel 5 All Right Reserved</p>
    </footer>
	
</body>
</html>