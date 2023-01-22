<?php
session_start();
include "../koneksi.php";
    if(!isset($_SESSION['user'])){
        header("location:index.php");
        exit();
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
    <link rel="stylesheet" type="text/css" href="user.css">
    <title>Boofut</title>
</head>
<body>
    <!-- header -->
    <div class="jumbotron">
        <h1>Boofut</h1>
    </div>
    <nav>
        <ul>
            <li><a href="booking.php">Booking</a></li>
            <li><a href="riwayatbooking.php">Riwayat Booking</a></li>
            <li><a href="logout.php" class="logout">Logout</a></li>
        </ul>
    </nav>

    <!-- main -->
        <div class="image">
        <h1 class="banner">Website Pemesanan Lapangan Futsal Online</h1>


    <!-- footer -->
    <footer>
        <p> &copy 2022 | Kel 5 All Right Reserved</p>
    </footer>
</body>
</html>