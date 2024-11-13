<h2>Data Mahasiswa</h2>

<a href="form.php">INPUT DATA</a>

<table border="1" style="border-collapse: collapse;">
    <tr bgcolor="#eee">
        <th width="50">No</th>
        <th width="100">Nim</th>
        <th width="250">Nama Mahasiswa</th>
        <th width="50">Kode Jurusan</th>
        <th width="50">Gender</th>
        <th width="200">Alamat</th>
        <th width="50">No hp</th>
        <th width="50">Email</th>
        <th colspan="2">#</th>
    </tr>

    <?php
    include 'koneksi.php';

    $no=1;
    $ambildata = mysqli_query($con,"SELECT * FROM mahasiswa")
     or die (mysqli_error($con));

     while($tampil = mysqli_fetch_array($ambildata)){
        echo"
        <tr>
            <td align='center'>$no</td>
            <td align='center'>$tampil[nim]</td>
            <td>$tampil[nama_mhs]</td>
            <td align='center'>$tampil[kode_mhs]</td>
            <td align='center'>$tampil[gender]</td>
            <td align='center'>$tampil[alamat]</td>
            <td align='center'>$tampil[no_hp]</td>
            <td align='center'>$tampil[email]</td>
            <td><a href='edit.php?update=$tampil[nim]'>
                <input type='button' value='Edit'>
            </a>
            </td>
            <td> 
                <a href='?hapus=$tampil[nim]' onClick=\"return confirm('Yakin akan menghapus data?');\">
                <input type='button' value='Hapus'>
                </a>
            </td>
        </tr>";
        $no++;
     }
    ?>
</table>

<?php
if(isset($_GET['hapus'])){

    mysqli_query($con, "DELETE FROM mahasiswa where nim='$_GET[hapus]'")
    or die (mysqli_error($con));

    echo "<p><b> Data Berhasil Dihapus</b></p>";
    echo "<meta http-equiv=refresh content=2;URL='data.php'>";
}
?>
