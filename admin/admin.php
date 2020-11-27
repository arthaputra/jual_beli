<?php 
session_start();
include '../config.php';
$barang = mysqli_query($koneksi, "SELECT * FROM daftar_barang");
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
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
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
                                <li class="nav-item">
                                    <a class="nav-link" href="pelanggan.php">Pelanggan</a>
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
            <form method="POST" action="../input-harga.php" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="nama" class="col-md-4 col-form-label text-md-right">Nama</label>
                <div class="col-md-6">
                    <input id="nama" type="text" class="form-control" name="nama" value="" required>                    
                    <span class="invalid-feedback" role="alert">
                    </span>                                
                </div>
            </div>
            <div class="form-group row">
                <label for="harga" class="col-md-4 col-form-label text-md-right">Harga(Rp)</label>
                <div class="col-md-6">
                    <input id="harga" type="text" class="form-control" name="harga" value="" required>                    
                    <span class="invalid-feedback" role="alert">
                    </span>                                
                </div>
            </div>
            <div class="form-group row">
                <label for="berat" class="col-md-4 col-form-label text-md-right">Berat(Gr)</label>
                <div class="col-md-6">
                    <input id="berat" type="text" class="form-control" name="berat" value="" required>                    
                    <span class="invalid-feedback" role="alert">
                    </span>                                
                </div>
            </div>
            <div class="form-group row">
                <label for="stok" class="col-md-4 col-form-label text-md-right">Stok</label>
                <div class="col-md-6">
                    <input id="stok" type="text" class="form-control" name="stok" value="" required>                    
                    <span class="invalid-feedback" role="alert">
                    </span>                                
                </div>
            </div>
            <div class="form-group row">
                <label for="files" class="col-md-4 col-form-label text-md-right">Gambar</label>
                <div class="col-md-6">
                    <input id="files" type="file" class="form-control" name="files" value="" required>                    
                    <span class="invalid-feedback" role="alert">
                    </span>                                
                </div>
            </div>
            <div class="form-group row">
                <label for="files" class="col-md-4 col-form-label text-md-right"></label>
                <div class="col-md-6">
                <button type="submit" class="btn btn-success btn-sm edit_data">Submit</button>
                    </span>                                
                </div>
            </div>
            </form>
            <div class="col-md-12">
            <h2>Daftar Barang</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Barang</th>
                        <th>Harga(Rp)</th>
                        <th>Berat(Gr)</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $i=1;
                    while($daftar = mysqli_fetch_array($barang)) { ?>
                    <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $daftar['nama_barang'] ?></td>
                        <td><?php echo number_format($daftar['harga'], 0, ",", ".") ?></td>
                        <td><?php echo $daftar['berat'] ?></td>
                        <td><?php echo $daftar['stok'] ?></td>
                        <td>
                            <button class="btn btn-info btn-sm edit_data"><a style="color: white" href="update.php?id_barang=<?php echo $daftar['id_barang'] ?>">Update</a></button>
                            <button class="btn btn-danger btn-sm edit_data"><a style="color: white" href="../hapus-data.php?id_barang=<?php echo $daftar['id_barang'] ?>">Hapus</a></button>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
        </div>
    </div>
</body>
</html>