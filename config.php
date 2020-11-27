<?php 
$db_name = "jual_beli";
$db_host = "localhost";
$db_user = "root";
$db_pass = "";

$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if(!$koneksi) {
    echo "error";
}
?>