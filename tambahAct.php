<?php

include('koneksi.php');

$nim = $_POST['nim'];
$nama = $_POST['nama_mahasiswa'];
$gender = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$tgl = $_POST['tanggal_lahir'];
$tlf = $_POST['no_telepon'];
$alamat = $_POST['alamat'];

//INSERT
mysqli_query($conn, "INSERT INTO mahasiswa VALUES('','$nim','$nama','$gender','$agama','$tgl','$tlf','$alamat')");

echo"<script> alert('Data Berhasil ditambah')</script>";
echo"<meta http-equiv='refresh' content='0; URL=mahasiswa.php'>";

?>