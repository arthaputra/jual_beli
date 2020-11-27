<?php 
include 'config.php';
$id_pesanan = intval($_GET['id_pesanan']);
$delete = mysqli_query($koneksi, "DELETE FROM daftar_pesanan WHERE id_pesanan='$id_pesanan'");
if($delete) {
    echo "<script>window.history.back();</script>";
} else {
    echo "<script>alert('Gagal Menghapus')</script>";
}

?>