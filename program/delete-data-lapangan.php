<?php 
require '../koneksi.php';
$id_lapangan=$_GET['id_lapangan'];
// include './config.php';
if (isset($_GET['id_lapangan'])) {
    $id = $_GET['id_lapangan'];

    $sql = "DELETE FROM `lapangan` where id_lapangan = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        // echo "Delete succesfull";
        header('location:admin.php');
    } else {
        die(mysqli_error($conn));
    }
}

?>
<!-- header("location:admin.php") -->


?>