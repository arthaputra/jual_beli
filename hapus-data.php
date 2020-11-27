<?php 
include 'config.php';
$id_pesanan = intval($_GET['id_barang']);
$delete = mysqli_query($koneksi, "DELETE FROM daftar_pesanan WHERE id_barang='$id_pesanan'");
$delet = mysqli_query($koneksi, "DELETE FROM daftar_barang WHERE id_barang='$id_pesanan'");
if($delete && $delet) {
    echo "<script>window.history.back();</script>";
} else {
    echo "<script>alert('Gagal Menghapus')</script>";
}
?>