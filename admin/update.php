<?php 
session_start();
include '../config.php';
if(isset($_SESSION['session'])) {
$email = $_SESSION['session'];
} else {
    $email = "";
}
$id_barang = intval($_GET['id_barang']);
$cek = mysqli_query($koneksi, "SELECT * FROM daftar_barang WHERE id_barang='$id_barang'");
$barang= mysqli_fetch_assoc($cek);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jual Beli Handphone</title>

    <!-- Scripts -->
    <script src="../public/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="../public/css/app.css" rel="stylesheet">
      <!-- Bootstrap Core CSS -->
 
    <!-- Custom Fonts -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link href="../public/css/stylish-portfolio.min.css" rel="stylesheet">
</head>
<body>
<div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="">
                    Jual Beli Handphone
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                                <li class="nav-item">
                                    <a class="nav-link">Admin</a>
                                </li>
                        <!--
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#page-top">Start Bootstrap</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    
                                    </form>
                                </div>
                            </li>
                            -->
                    </ul>
                </div>
            </div>
        </nav>
    <div class="container padding-top">
        <div class="col-md-12">
            <h2>Tambah Barang</h2>
            <form method="POST" action="../update.php" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="nama" class="col-md-4 col-form-label text-md-right">Nama</label>
                <div class="col-md-6">
                    <input type="hidden" name="id_barang" value="<?php echo $id_barang ?>">
                    <input id="nama" type="text" class="form-control" name="nama" value="<?php echo $barang['nama_barang'] ?>" required>                    
                    <span class="invalid-feedback" role="alert">
                    </span>                                
                </div>
            </div>
            <div class="form-group row">
                <label for="harga" class="col-md-4 col-form-label text-md-right">Harga(Rp)</label>
                <div class="col-md-6">
                    <input id="harga" type="text" class="form-control" name="harga" value="<?php echo $barang['harga'] ?>" required>                    
                    <span class="invalid-feedback" role="alert">
                    </span>                                
                </div>
            </div>
            <div class="form-group row">
                <label for="berat" class="col-md-4 col-form-label text-md-right">Berat(Gr)</label>
                <div class="col-md-6">
                    <input id="berat" type="text" class="form-control" name="berat" value="<?php echo $barang['berat'] ?>" required>                    
                    <span class="invalid-feedback" role="alert">
                    </span>                                
                </div>
            </div>
            <div class="form-group row">
                <label for="stok" class="col-md-4 col-form-label text-md-right">Stok</label>
                <div class="col-md-6">
                    <input id="stok" type="text" class="form-control" name="stok" value="<?php echo $barang['stok'] ?>" required>                    
                    <span class="invalid-feedback" role="alert">
                    </span>                                
                </div>
            </div>
            <div class="form-group row">
                <label for="files" class="col-md-4 col-form-label text-md-right"></label>
                <div class="col-md-6">
                <button type="submit" class="btn btn-success btn-sm edit_data">Update</button>
                <button type="button" class="btn btn-danger btn-sm edit_data"><a style="color: white" href="admin.php">Kembali</a></button>
                    </span>                                
                </div>
            </div>
            </form>
        </div>
    </div>
</body>
</html>