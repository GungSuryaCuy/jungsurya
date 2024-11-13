<?php

$nim = $_POST['nim'];
$nama_mhs = $_POST['nama_mhs'];
$kode_mhs = $_POST['kode_mhs'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];

include 'koneksi.php';

$qry = "INSERT INTO mahasiswa VALUES (
    '$nim', '$nama_mhs', '$kode_mhs', '$gender', '$alamat', '$no_hp', '$email'
)";

$exec = mysqli_query($con, $qry);

if($exec){
    echo "<script>alert('Data berhasil di simpan'); window.location = 'data.php';</script>";
}else{
    echo "Data gagal di simpan";
}
?>
