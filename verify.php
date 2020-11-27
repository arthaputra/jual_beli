<?php 
include 'config.php';
session_start();
$email = $_POST['email'];
$password = $_POST['password'];


if(isset($_POST['nama'])) {
    $nama = $_POST['nama'];
    $phone = $_POST['phone'];
    $konpassword = $_POST['konpassword'];
    if($password == $konpassword) {
    $ins = mysqli_query($koneksi, "INSERT INTO users (nama, email, password, phone)
    VALUES ('$nama', '$email', '$password', '$phone')");
    if($ins) {
        echo "<script>window.location='index.php'</script>";
    }
} else {
    echo "<script>alert('Password Tidak Cocok'); window.history.back();</script>";
}
} else {
$cek = mysqli_query($koneksi, "SELECT * FROM users WHERE email='$email' AND password='$password'");
$admin = mysqli_fetch_array($cek);
if(mysqli_num_rows($cek) == 0) {
    echo "<script>alert('Email atau Password Salah !'); window.history.back();</script>";
        } else {
            if($admin['level'] == "admin") {
                echo "<script>window.location='admin/admin.php'</script>";
            } else {
                echo "<script>window.location='index.php'</script>";
        }
    }
}
$_SESSION['session'] = $email;
?>