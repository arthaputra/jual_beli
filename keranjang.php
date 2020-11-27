<?php 
session_start();
include 'config.php';
if(isset($_SESSION['session'])) {
$email = $_SESSION['session'];
} else {
    $email = "";
}
$cek = mysqli_query($koneksi, "SELECT * FROM users WHERE email='$email'");
$users = mysqli_fetch_assoc($cek);

$krj = mysqli_query($koneksi, "SELECT * FROM daftar_pesanan AS A
INNER JOIN daftar_barang AS B
ON B.id_barang = A.id_barang WHERE A.status='Keranjang' AND A.id_user='".$users['id_user']."'");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jual Beli Handphone</title>

    <!-- Scripts -->
    <script src="public/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="public/css/app.css" rel="stylesheet">
      <!-- Bootstrap Core CSS -->
 
    <!-- Custom Fonts -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link href="public/css/stylish-portfolio.min.css" rel="stylesheet">
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
                        <?php if(!isset($_SESSION['session'])) { ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="login.php">Login</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="register.php">Register</a>
                                </li>
                        <?php } else { ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <?php echo $users['nama']; ?>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="logout">Logout</a>
                                </div>
                            </li>
                        <?php } ?>
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
            <h2>Keranjang Belanja</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>SubHarga</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                $i=0;
                while($keranjang = mysqli_fetch_array($krj)) { ?>
                    <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $keranjang['nama_barang'] ?></td>
                        <td>Rp<?php echo number_format($keranjang['subHarga'], 0, ",", ".") ?></td>
                        <td><?php echo $keranjang['jumlah'] ?></td>
                        <td>Rp<?php echo number_format($keranjang['harga'], 0, ",", ".") ?></td>
                        <td><button class="btn btn-danger btn-sm edit_data"><a style="color: white" href="hapus-keranjang.php?id_pesanan=<?php echo $keranjang['id_pesanan'] ?>">Hapus</button></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <button class="btn btn-info btn-sm edit_data"><a href="index.php" style="color: white">Lanjut Belanja</a></button>
            <button class="btn btn-success btn-sm edit_data">Checkout</button>
        </div>
    </div>
</body>
</html>