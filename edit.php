<h2>Edit Data Mahasiswa</h2>

<a href="data.php">KEMBALI</a>
<?php
include 'koneksi.php';
$sql = mysqli_query($con, "SELECT * FROM mahasiswa where nim='$_GET[update]'");
$data=mysqli_fetch_array($sql);

?>

<form action="" method="POST" >
    <table>
                <tr>
                    <td>NIM (Nomor induk mahasiswa)</td>
                    <td>:</td>
                    <td><input type="number" name="nim" value="<?php echo $data['nim']; ?>" readonly></td>
                </tr>
                <tr>
                    <td>Nama mahasiswa</td>
                    <td>:</td>
                    <td><input type="text" name="nama_mhs" value="<?php echo $data['nama_mhs']; ?>"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><select name="kode_mhs">
                            <option value="001">Sistem Komputer</option>
                            <option value="002">Sistem Informasi</option>
                            <option value="003">Teknologi Informasi</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>:</td>
                    <td>
                        <?php
                            if($data['gender'] = 1) {
                        ?>
                            <input type="radio" name="gender" value="1" checked> laki-laki
                            <input type="radio" name="gender" value="2"> Perempuan
                        <?php } else { ?>
                            <input type="radio" name="gender" value="1"> laki-laki
                            <input type="radio" name="gender" value="2" checked> Perempuan
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
                </tr>
                <tr>
                    <td>No. HP</td>
                    <td>:</td>
                    <td><input type="text" name="no_hp" value="<?php echo $data['no_hp']; ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="email" name="email" value="<?php echo $data['email']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="simpan" name="proses"></td>
                </tr>
    </table>
</form>
<?php

if(isset($_POST['proses'])){

    mysqli_query($con, "update mahasiswa set
    nama_mhs = '$_POST[nama_mhs]',
        kode_mhs = '$_POST[kode_mhs]',
        gender = '$_POST[gender]',
        alamat = '$_POST[alamat]',
        no_hp = '$_POST[no_hp]',
        email = '$_POST[email]',
        nim = '$_POST[nim]' WHERE nim =$_GET[update]") or die(mysqli_error($con));
        

        echo "<script>alert('Data berhasil tersimpan');
        document.location='data.php'</script>";
}
?>
