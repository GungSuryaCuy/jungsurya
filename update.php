<?php
include 'koneksi.php';

$nim = $_GET['nim'];
$nama_mhs = $_GET['nama_mhs'];
$kode_mhs = $_GET['kode_mhs'];
$gender = $_GET['gender'];
$alamat = $_GET['alamat'];
$no_hp = $_GET['no_hp'];
$email = $_GET['email'];



mysqli_query($con,"UPDATE mahasiswa SET 
        nama_mhs = '$nama_mhs',
        kode_mhs = '$kode_mhs',
        gender = '$gender',
        alamat = '$alamat',
        no_hp = '$no_hp',
        email = '$email'
        WHERE nim = '$nim'
        ");

header("location:data.php");


?>
