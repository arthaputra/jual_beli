<?php 

include 'config.php';
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$berat = $_POST['berat'];
$gambar = $_FILES['files']['name'];

$ekstensisertif = array('png','jpg', 'jpeg'); //ekstensi file gambar yang bisa diupload 
$y = explode('.', $gambar); //memisahkan nama file dengan ekstensi yang diupload
$ekstensiser = strtolower(end($y));
$gambar_tmp = $_FILES['files']['tmp_name'];
$gambar_baru = $gambar;
      if(in_array($ekstensiser, $ekstensisertif) === true)  {     
              move_uploaded_file($gambar_tmp, 'public/img/'.$gambar);
      } else {
          echo "Format Gambar Tidak Didukung";
      }

$ins = mysqli_query($koneksi, "INSERT INTO daftar_barang (nama_barang, harga, stok, berat, gambar)
VALUES('$nama', '$harga', '$stok', '$berat', '$gambar_baru')");
if($ins) {
   echo "<script>window.history.back();</script>";
} else {
   echo "<script>alert('Gagal mengupload'); window.history.back();</script>";
}
?>