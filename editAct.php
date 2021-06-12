<?php

include('koneksi.php');

$id = $_POST['id_mahasiswa'];
$nim = $_POST['nim'];
$nama = $_POST['nama_mahasiswa'];
$gender = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$tgl = $_POST['tanggal_lahir'];
$tlf = $_POST['no_telepon'];
$alamat = $_POST['alamat'];

//INSERT
mysqli_query($conn, "UPDATE mahasiswa set nim = '$nim', nama_mahasiswa = '$nama', jenis_kelamin = '$gender', agama = '$agama', tanggal_lahir = '$tgl', no_telepon = '$tlf', alamat = '$alamat' WHERE id_mahasiswa = '$id' ");

echo"<script> alert('Data Berhasil diubah')</script>";
echo"<meta http-equiv='refresh' content='0; URL=mahasiswa.php'>";

?>