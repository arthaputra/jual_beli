<?php 
include 'config.php';
$id_barang = $_GET['id_barang'];
$id_user = $_GET['id_user'];

$krj = mysqli_query($koneksi, "SELECT * FROM daftar_barang WHERE id_barang='$id_barang'");
$pesan = mysqli_fetch_assoc($krj);
$total = $pesan['harga'] * 1;

$input = mysqli_query($koneksi, "INSERT INTO daftar_pesanan (id_barang, id_user, harga, jumlah, subHarga, status)
VALUES('$id_barang', '$id_user', '$total', '1', '".$pesan['harga']."', 'Keranjang')");
if($input) {
   echo "<script>window.location='keranjang.php'</script>";
} else {
   echo "<script>alert('Gagal Memesan')</script>";
}


?>