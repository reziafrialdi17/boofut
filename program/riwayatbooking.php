<?php
    include "../koneksi.php";
    $ambildata = "SELECT * FROM booking ORDER BY id_booking DESC";
	$resultdata = mysqli_query($conn,$ambildata);
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
    <link rel="stylesheet" type="text/css" href="booking.css">
    <title>Riwayat Booking</title>

</head>
<body>

    <!--main-->
    <h1 class="ket1">Data Riwayat Booking</h1>

    <table class="table2">
        <tr>
            <th>ID Booking</th>
            <th>ID Lapangan</th>
            <th>ID User</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No Handphone</th>
            <th>Nama Lapangan</th>
            <th>Alamat</th>
            <th>Harga Sewa</th>
            <th>Lama Sewa</th>
            <th>Total Harga Sewa</th>
            <th>Bayar Booking</th>
        </tr>


        <tr>
            <?php while ($databooking = mysqli_fetch_assoc($resultdata)):?>
            <tr>
                <td><?php echo $databooking['id_booking']; ?></td>
                <td><?php echo $databooking['id_lapangan']; ?></td>
                <td><?php echo $databooking['id_user']; ?></td>
                <td><?php echo $databooking['nama']; ?></td>
                <td><?php echo $databooking['email']; ?></td>
                <td><?php echo $databooking['no_hp']; ?></td>
                <td><?php echo $databooking['nama_lapangan']; ?></td>
                <td><?php echo $databooking['alamat']; ?></td>
                <td><?php echo $databooking['harga_sewa']; ?></td>
                <td><?php echo $databooking['lama_sewa']; ?></td>
                <td><?php echo $databooking['total_harga_sewa']; ?></td>
                <td><?php echo $databooking['bayar_booking']; ?></td>
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