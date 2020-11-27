<?php 

include 'config.php';
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$berat = $_POST['berat'];
$id_barang = $_POST['id_barang'];

$ins = mysqli_query($koneksi, "UPDATE daftar_barang SET nama_barang='$nama', harga='$harga', stok='$stok', berat='$berat' WHERE id_barang='$id_barang'");
if($ins) {
   echo "<script>window.history.back();</script>";
} else {
   echo "<script>alert('Gagal mengupload'); window.history.back();</script>";
}
?>